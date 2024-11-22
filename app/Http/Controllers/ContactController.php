<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        
        Mail::to('alwanfadlur@gmail.com')->send(new HelloMail($validated));

        return redirect()->back()->with('success', 'Email berhasil dikirim!');
    }
}

