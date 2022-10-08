<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function enviarcorreo(Request $request){
        $nombre = $request->input('nombre');
        $asunto = $request->input('asunto');
        $email = $request->input('email');
        $mensaje = $request->input('mensaje');
        $para = 'Nosotros@gmail.com';

        Mail::send('correo.email', $request->all(), function($msg) use($asunto,$nombre,$email,$para){
            $msg->from($email,$nombre);
            $msg->subject($asunto);
            $msg->to($para);
        });
        return view('welcome');
    }

        

}
    /*  
    public function enviodecorreo(Request $request){

        $para = 'Nosotros@gmail.com';

        Mail::send('email.correo',$request->all(), function($msj) use($asunto,$nombre,$email,$para){
            $msj->from($email,$nombre);
            $msj->subject($asunto);
            $msj->to($para);
        });
        return view('welcome');

    }
    */