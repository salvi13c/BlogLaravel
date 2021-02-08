<?php

namespace App\Http\Controllers;

use App\Models\post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class makePostController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }
    public function __invoke()
    {
        return view ('makePost');
    }
    
    public function createPost(Request $request)
    {
        $user = new post;
        
        $user->userName = Auth::user()->name;
        $user->userId = Auth::id();
        $user->title = $request->title;
        $user->message= $request->message;
        $user->dateOfCreation= Carbon::now()->toDateTimeString();
        $user->save();
        return "se ha creado el post con exito";
    }
}
