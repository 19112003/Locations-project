<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }


   public function sendContactForm(Request $request)
   {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $emailData = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

    

        Mail::to('ange.kouomo@2026.ucac-icam.com')->send(new ContactForm($emailData));

        return redirect('/contact')->with('success', 'Votre message a été envoyé avec succès !');
   }

}
