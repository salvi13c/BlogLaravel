<?php
namespace app\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class LogoutController extends Controller{
    
    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct()
    {
        Auth::logout();
     
    }
    public function __invoke()
    {
        return redirect('/login');
    }
}

