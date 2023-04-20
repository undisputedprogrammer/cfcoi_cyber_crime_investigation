<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request){
        $details=$request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email'],
            'message'=>['required','min:5'],
            'phone'=>['required','min:10'],
        ]);
        $name=$details['name'];
        $email=$details['email'];
        $message=$details['message'];
        $phone=$details['phone'];
        Mail::to('ali.cs.here@gmail.com')->send(new ContactMail($name, $email, $phone, $message));
        return true;

    }
}
