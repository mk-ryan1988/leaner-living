<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function postForm(Request $request) {

      $request->validate([
           'name' => 'required',
           'email' => 'required',
           'message' => 'required',
       ]);

       if (env('MAILGUN_DOMAIN')) {

         Mail::send('emails.contact', ['input' => $request->input()], function($message) use ($request)
         {
           $message->from($request->email, $request->name);
           $message->to(env('CONTACT_EMAIL'))->subject('Contact Form Message');
         });
         return redirect()->back()->with('alert', 'Thank you, message recieved!');

       }else {

         return redirect()->back()->with('alert', 'Unable to send, alternatively message us on facebook!');
       }
    }
}
