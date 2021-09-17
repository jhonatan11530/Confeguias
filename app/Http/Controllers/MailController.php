<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;
class MailController extends Controller
{
    public function MailContacto(Request $request)
    {
     
        $mensaje= request()->validate([
            'Nombre'=>'required',
            'Correo'=>'required',
            'Telefono'=>'required',
            'Asunto'=>'required',
            'Mensaje'=>'required'
        ]);
        Mail::to('correo@dominio.com')->send(new MessageReceived($mensaje));

        return redirect('contacto');
    }
}
