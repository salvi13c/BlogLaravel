<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class listaLibrosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke()
    {
        $books = DB::select('select * from books');
        return view('listaLibros', [
            'books' => $books
        ]);
    }
}
