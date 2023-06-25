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
Route::view('/principal', 'user.principal') -> middleware('auth') -> name('principal');
Route::view('/user/registrar', 'user.registrar') -> middleware('auth') -> name('reg_user');
Route::view('/user/mostrar', 'user.mostrar') -> middleware('auth') -> name('mos_user');
Route::view('/personal/registrar', 'personal.registrar') -> middleware('auth') -> name('reg_personal');
Route::view('/personal/mostrar', 'personal.mostrar') -> middleware('auth') -> name('mos_personal');

Route::post('/validar_sesion', 'UserController@index') -> name('validar_sesion');
Route::post('/user/login', 'UserController@login') -> name('User_login');
Route::get('/user/logout', 'UserController@logout') -> name('logout');
Route::post('/user/validar_registro', 'UserController@store') -> middleware('auth') -> name('user_validar_sesion');
Route::get('/user/ver_usuarios', 'UserController@index') -> middleware('auth') -> name('user_ver_user');
Route::get('/user/mostrar/{id}', 'UserController@show') -> middleware('auth') -> name('user_mos_user');
Route::post('/personal/validar_registro', 'PersonalController@store') -> middleware('auth') -> name('personal_validar_sesion');
Route::get('/personal/ver_personal', 'PersonalController@index') -> middleware('auth') -> name('personal_ver_personal');
Route::get('/personal/mostrar/{id}', 'PersonalController@show') -> middleware('auth') -> name('personal_mos_personal');