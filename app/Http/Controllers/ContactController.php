<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function send(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:1000']
        ]);

        //sending Mail

        return redirect()->route('send')->with('success', "Thanks for your message. I'll get back to you as soon as I can");
    }
}
