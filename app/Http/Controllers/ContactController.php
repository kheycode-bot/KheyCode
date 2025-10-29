<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    public function submit(Request $request)
{
    \Log::info('Contact form submission started', $request->all());
    
    $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'nullable|max:255',
        'message' => 'required|max:5000'
    ]);

    \Log::info('Validation passed', $validated);

    try {
        \Log::info('Attempting to send email');
        
        Mail::to('kheycode@gmail.com')
            ->send(new ContactFormSubmitted($validated));
            
        \Log::info('Email sent successfully');
        return back()->with('success', 'Thank you! Your message has been sent.');
    } catch (\Exception $e) {
        \Log::error('Email failed: '.$e->getMessage());
        \Log::error('Full exception:', ['exception' => $e]);
        return back()->with('error', 'Sorry, there was an error. Please try again.');
    }
}
}