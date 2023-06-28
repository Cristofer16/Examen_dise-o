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
Route::view('/mensaje', 'mensaje') -> middleware('auth') -> name('mensaje');
Route::view('/user/registrar', 'user.registrar') -> middleware('auth') -> name('reg_user');
Route::view('/user/mostrar', 'user.mostrar') -> middleware('auth') -> name('mos_user');
Route::view('/personal/registrar', 'personal.registrar') -> middleware('auth') -> name('reg_personal');
Route::view('/personal/mostrar', 'personal.mostrar') -> middleware('auth') -> name('mos_personal');

Route::post('/validar_sesion', 'UserController@index') -> name('validar_sesion');
Route::post('/user/login', 'UserController@login') -> name('User_login');
Route::get('/user/logout', 'UserController@logout') -> name('logout');

Route::post('/user/validar_registro', 'UserController@store') -> middleware('auth') -> name('user_validar_registro');
Route::get('/user/ver_usuarios', 'UserController@index') -> middleware('auth') -> name('user_ver_user');
Route::get('/user/mostrar/{id}', 'UserController@show') -> middleware('auth') -> name('user_mos_user');
Route::get('/user/eliminar/{id}', 'UserController@destroy') -> middleware('auth') -> name('user_eli_user');
Route::get('/user/editar/{id}', 'UserController@edit') -> middleware('auth') -> name('user_edi_user');
Route::post('/user/actualizar/{id}', 'UserController@update') -> middleware('auth') -> name('user_validar_actualizacion');

Route::post('/personal/validar_registro', 'PersonalController@store') -> middleware('auth') -> name('personal_validar_registro');
Route::get('/personal/ver_personal', 'PersonalController@index') -> middleware('auth') -> name('personal_ver_personal');
Route::get('/personal/mostrar/{id}', 'PersonalController@show') -> middleware('auth') -> name('personal_mos_personal');
Route::get('/personal/eliminar/{id}', 'PersonalController@destroy') -> middleware('auth') -> name('personal_eli_personal');
Route::get('/personal/editar/{id}', 'PersonalController@edit') -> middleware('auth') -> name('personal_edi_personal');
Route::post('/personal/actualizar/{id}', 'PersonalController@update') -> middleware('auth') -> name('personal_validar_actualizacion');

Route::get('/documento/mostrar/{id}', 'DocumentoController@show') -> middleware('auth') -> name('documento_mos_documento');
Route::get('/documento/eliminar/{id}', 'DocumentoController@destroy') -> middleware('auth') -> name('documento_eli_documento');
Route::get('/documento/editar/{id}', 'DocumentoController@edit') -> middleware('auth') -> name('documento_edi_documento');
Route::get('/documento/actualizar/{id}', 'DocumentoController@update') -> middleware('auth') -> name('documento_validar_actualizacion');
Route::post('/documento/registrar', 'DocumentoController@create') -> middleware('auth') -> name('crear_documento');
Route::post('/documento/validar_registro', 'DocumentoController@store') -> middleware('auth') -> name('documento_validar_registro');