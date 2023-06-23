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
Route::view('/user/registrar', 'user.registrar') -> middleware('auth') -> name('reg_user');
Route::view('/principal', 'user.principal') -> middleware('auth') -> name('principal');
Route::view('/personal/registrar', 'personal.registrar') -> middleware('auth') -> name('reg_personal');
Route::view('/personal/ver', 'personal.ver') -> middleware('auth') -> name('ver_personal');

Route::post('/validar_sesion', 'UserController@index') -> name('validar_sesion');
Route::post('/user/validar_registro', 'UserController@store') -> name('user_validar_sesion');
Route::post('/user/login', 'UserController@login') -> name('User_login');
Route::get('/user/logout', 'UserController@logout') -> name('logout');
Route::get('/user/ver_usuarios', 'UserController@index') -> name('user_ver_user');
Route::post('/personal/validar_registro', 'PersonalController@store') -> name('personal_validar_sesion');
Route::get('/personal/ver_personal', 'PersonalController@index') -> name('personal_ver_personal');