<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class InquiryController extends Controller
{
    public function index(): View
    {
        $inquiries = Inquiry::latest()->paginate(10);

        return view('admin.inquiries.index', compact('inquiries'));
    }

    public function show(Inquiry $inquiry): View
    {
        if (! $inquiry->read_at) {
            $inquiry->update([
                'status' => 'read',
                'read_at' => now(),
            ]);
        }

        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function markAsReplied(Inquiry $inquiry): RedirectResponse
    {
        $inquiry->update([
            'status' => 'replied',
        ]);

        return back()->with('success', 'Inquiry marked as replied.');
    }
}