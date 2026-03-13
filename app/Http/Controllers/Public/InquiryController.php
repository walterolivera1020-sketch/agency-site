<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Http\Requests\InquiryStoreRequest;
use App\Mail\InquiryAutoReplyMail;
use App\Mail\InquiryReceivedMail;
use App\Models\Inquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function store(InquiryStoreRequest $request): RedirectResponse
    {
        $inquiry = Inquiry::create([
            'first_name' => $request->firstName,
            'last_name'  => $request->lastName,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'position'   => $request->position,
            'message'    => $request->message,
            'status'     => 'new',
        ]);

        // Send to company/admin email
        Mail::to(config('mail.admin_address'))->send(new InquiryReceivedMail($inquiry));

        // Auto reply to user
        Mail::to($inquiry->email)->send(new InquiryAutoReplyMail($inquiry));

        return back()->with('success', 'Your inquiry has been sent successfully.');
    }
}