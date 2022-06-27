<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('exterior/index');
});

Route::get('exterior/noticias', function(){
    return view('exterior/noticias');
});

Route::get('exterior/eventos', function(){
    return view('exterior/eventos');
});

Route::get('exterior/galeria', function(){
    return view('exterior/galeria');
});

Route::get('exterior/biblioteca', function(){
    return view('exterior/biblioteca');
});

Auth::routes();

Route::get('exterior/login',[UserController::class, 'register'])->name('login');
Route::post('exterior/login/action',[UserController::class, 'register_action'])->name('register.action');
Route::post('exterior/login/action',[UserController::class, 'register_inicio'])->name('register.inicio');

Route::post('exterior/login',[UserController::class, 'login_inicio'])->name('login.inicio');
Route::get('interior/pricipal',[UserController::class, 'principal'])->name('inicio_interno');


?>
