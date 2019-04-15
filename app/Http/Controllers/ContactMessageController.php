<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactMessageController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::send(
            'email.contact-message',
            ['msg' => $request->message,],
            function ($mail) use($request) {
                $mail->from($request->email, $request->name)
                     ->to('lyov.margaryan.9595@gmail.com')
                     ->subject('Contact Message');
            }
        );

        return redirect()->back()->with('flash_message', 'Thank you for your message');
    }
}
