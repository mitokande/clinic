<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GeneralController extends Controller
{
    //

    public function SendContactMail(Request $request){

        Mail::send("misc.email-contact",[
            "name"=>$request->name,
            "email"=>$request->email,
            "telephone"=>$request->telephone,
            "messagee"=>$request->input('message'),
        ],function ($message) use(&$request){
            $message->to($request->email,$request->email)->subject("User Sent a Contact Form");
        });
        return redirect('/contact');
    }

    public function Blogs(){
        return view('blogs',[
            'blogs'=>Blog::all()
        ]);
    }
}
