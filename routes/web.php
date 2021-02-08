<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//use App\Http\Controllers\HomeController;
use App\Http\Controllers\biografiaController;
use App\Http\Controllers\enviarMailSugerenciaController;
use App\Http\Controllers\listaLibrosController;
use App\Http\Controllers\navigationMenuController;
use App\Http\Controllers\sugerenciasController;
use Illuminate\Auth\Events\Logout;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\makePostController;
use App\Http\Controllers\detallesLibroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', navigationMenuController::class);

Auth::routes();
Route::get('/home', navigationMenuController::class);
Route::get('/logout', LogoutController::class);
Route::get('/biografia', biografiaController::class);
Route::get('/listaLibros', listaLibrosController::class);
Route::get('/sugerencias', sugerenciasController::class);
Route::get('/crearpost', makePostController::class);
Route::post('/detalleslibro', detallesLibroController::class);
Route::post('/crearpost', [makePostController::class,'createPost']);
Route::post('/sugerencias', [enviarMailSugerenciaController::class,'EnviarMail']);
Route::post('/comprarLibro', [detallesLibroController::class,'ComprarLibro']);
    





