<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.ver') -> with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $user -> nombres = $request -> nombres;
        $user -> apellido_paterno = $request -> app;
        $user -> apellido_materno = $request -> apm;
        $user -> usuario = $request -> usuario;
        $user -> password = Hash::make($request -> password);
        $user -> tipo = $request -> tipo;

        $user -> save();

        return redirect() -> route('reg_user') -> with('exito', 'Usuario registrado con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        //dd($user -> nombres);
        return view('user.mostrar') -> with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request) {
        $credenciales = [
            "usuario" => $request -> usuario,
            "password" => $request -> contraseña,
            "activo" => "S"
        ];
        
        if (Auth::attempt($credenciales)) {
            $request -> session() -> regenerate();
            return redirect() -> route('principal');
        } else {
            return redirect() -> route('login') -> with('Fallo', 'Uausrio y/o contraseña invalidos, verifique por favor.');
        }
    }
    public function logout(Request $request) {
        Auth::logout();
        $request -> session() -> invalidate();
        $request -> session() -> regenerateToken();

        return redirect() -> route('login');
    }
}
