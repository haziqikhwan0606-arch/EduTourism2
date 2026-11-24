<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'department' => 'nullable|string|max:255',
            'inquiry_type' => 'required|string|in:partnerships,general',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:3000',
        ]);

        return redirect()->back()->with('success', 'Thank you! Your inquiry has been sent to our academic partnerships team (edutourism@olympia-education.com). We will get back to you shortly.');
    }
}

