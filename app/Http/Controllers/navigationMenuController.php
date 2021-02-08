<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class navigationMenuController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function __invoke()
    {
        $posts = DB::select('select * from entradas_blog order by dateOfCreation DESC');
        $administrators = DB::select('select * from administrators');
        return view ('welcome',['posts'=>$posts],['administrators'=>$administrators]);
    }
    
    
}
