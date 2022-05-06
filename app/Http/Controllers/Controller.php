<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function accueil(){
        return view("welcomeEmmaus");
    }
    public function histoire(){
        return view("histoire");
    }
    public function contactForm(){
        return view("email.formulaire");
    }

    public function envoyerEmail(Request $request){
        $data=$request->validate([
            "email"=>"required|email",
            "sujet"=>"required",
            "message"=>"required",
            'captcha' => 'required|captcha'
        ]);

        Mail::to('mustfahinur@gmail.com')->send(new Contact($data["email"], $data["sujet"],$data["message"]));


        // Mail::send('email.email', [
        //     "email"=>$data["email"],
        //     "sujet"=>$data["sujet"],
        //     "texte"=>$data["message"]
        // ], function ($message) use ($data)  {
        //     $message->from($data["email"]);
        //     $message->to('timotheemoulin01@gmail.com', 'Admin');
        //     $message->replyTo($data["email"],);
        //     $message->subject('GretaVoyages '.$data["sujet"]);
        //     $message->priority(3);

        // });

    }


    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

}
