<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{

public function sendEmail(Request $request)
{
    $details = [
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message
    ];

    Mail::to('davidtoreh12@gmail.com')->send(new ContactMail($details));
    return back()->with('message-sent','Your message has been sent');
}


}