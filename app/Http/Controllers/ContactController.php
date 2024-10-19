<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the incoming request data

        $validated = $request->validate([
            'name'    => 'required|max:255',
            'email'   => 'required|email',
            'message' => 'required',
        ]);

        // Process the data (e.g., send an email)

        // Example: Sending an email (you need to set up mail configuration)
        /*
        Mail::to('your.email@example.com')->send(new ContactMail($validated));
        */

        // For now, let's just return a success message

        return redirect('/')->with('success', 'Thank you for your message. I will get back to you soon!');
    }
}
