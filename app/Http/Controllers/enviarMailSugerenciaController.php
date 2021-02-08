<?php

namespace App\Http\Controllers;
use App\Mail\pruebamail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class enviarMailSugerenciaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function __invoke()
    {
        return view ('enviarSugerencia');
    }
    
    
    public function EnviarMail(Request $request)
    {
        Mail::send(['html'=>'mailSugerencia'], $data=[
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject') ],
            function ($message) use ($request) {
                $message->from('biblioteca@prueba.com');
                $message->to($request->get('email'), $request->get('name'))
                ->subject('Se ha enviado una sugerencia');
            }
            );
    
            
       
        
        return 'Se ha enviado la sugerencia con exito';
    }
}

