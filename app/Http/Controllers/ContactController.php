<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:500',
        ]);

        // Send email
        $emailData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
        ];

        Mail::send('emails.contact', $emailData, function ($message) use ($emailData) {
            $message->to('vinugeena81@gmail.com')
                ->subject('New Contact Form Submission');
        });

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Message Successfully');
    }
}