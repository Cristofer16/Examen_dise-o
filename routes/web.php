<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('user.index');
});  */

Route::view('/', 'user.index') -> name('login');
Route::view('/principal', 'user.principal') -> name('principal');
Route::view('/personal/registrar', 'personal.registrar') -> name('reg_personal');
Route::view('/user/registrar', 'user.registrar') -> name('reg_user');

Route::post('/validar_sesion', 'UserController@index') -> name('validar_sesion');
Route::post('/user/validar_registro', 'UserController@store') -> name('user_validar_sesion');