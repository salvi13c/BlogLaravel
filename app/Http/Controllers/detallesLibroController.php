<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class detallesLibroController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function __invoke(Request $request)
    {
        $titulo = $request->get('id');
        $books = DB::table('books')
        ->where('id','=', $titulo)
        ->get();
         return view('detallesLibro', [
            'books' => $books
        ]);
    }
    
    public function ComprarLibro(Request $request)
    {
        Mail::send(['html'=>'mailComprar'], $data=[
            'nombre' => Auth::user()->name,
            'titulo' => $request->get('titulo'),
            'editorial' => $request->get('editorial'),
            'cantidad' => $request->get('cantidad'),
            'precio' => $request->get('precio'),
            'direccion' => $request->get('direccion'),
            'telefono' => $request->get('phone')],
            function ($message) use ($request) {
                $message->from('biblioteca@prueba.com');
                $message->to(Auth::user()->email, Auth::user()->name)
                ->subject('Se ha efectuado la compra de un libro');
            }
            );
        
        
        
        
        return 'Se ha comprado el libro ';
    }
}


