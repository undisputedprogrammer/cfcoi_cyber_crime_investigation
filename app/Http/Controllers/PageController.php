<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home(){
        return view('duphome');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
    return view('contact');
}
    public function training(){
        return view('training');
    }

    public function mail(Request $request){
        $details=$request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email'],
            'message'=>['required','min:5'],
            'phone'=>['required','min:10'],
        ]);

        // dd($details);
        $name=$details['name'];
        $email=$details['email'];
        $message=$details['message'];
        $phone=$details['phone'];
        Mail::to('ali.cs.here@gmail.com')->send(new ContactMail($name, $email, $phone, $message));
        return true;


    }
}
