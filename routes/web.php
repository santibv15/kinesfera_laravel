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

Route::get('exterior/login', function(){
    return view('exterior/login');
});

Route::controller(UserController::class)->group(function(){
    Route::post('register','create')->name('registrar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
