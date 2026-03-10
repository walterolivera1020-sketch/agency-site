<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'user_email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'preferred_role' => 'nullable|string|max:255',
            'destination' => 'nullable|string|max:255',
            'message' => 'required|string'
        ]);

        $inquiry = Inquiry::create([
            'full_name' => $request->full_name,
            'user_email' => $request->user_email,
            'phone' => $request->phone,
            'preferred_role' => $request->preferred_role,
            'destination' => $request->destination,
            'message' => $request->message
        ]);

        return response()->json([
            'message' => 'Inquiry submitted successfully.'
        ]);
    }
}
