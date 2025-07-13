<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    // Show the contact form
    public function index()
    {
        return view('contact');
    }

    // Handle form submission
    public function submit(Request $request)
    {
        // Validate inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:2000',
        ]);

        // Log user input
        Log::info('Contact Form Submitted', $validated);

        // Flash success message
        Session::flash('success', 'Your message has been sent successfully!');

        
        return redirect()->route('contact.confirm')->with('form_data', $validated);
    }

    
    public function confirm()
    {
        $formData = session('form_data');

        
        if (!$formData) {
            return redirect()->route('contact.index');
        }

        return view('contact.confirmation', compact('formData'));
    }
}
