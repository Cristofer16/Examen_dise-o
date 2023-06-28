<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;
use Illuminate\Support\Facades\Auth;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personales = Personal::all();
        return view('personal.ver') -> with('personales', $personales);
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
        $personal = new Personal();

        $personal -> nombres = $request -> nombres;
        $personal -> apellido_paterno = $request -> app;
        $personal -> apellido_materno = $request -> apm;
        $personal -> telefono = $request -> telefono;
        $personal -> celular = $request -> celular;
        $personal -> ci = $request -> ci;
        $personal -> domicilio = $request -> domicilio;
        $personal -> tipo_contrato = $request -> tipo_contrato;
        $personal -> user_id = Auth::user() -> id;
        
        $personal -> save();

        return redirect() -> route('reg_personal') -> with('exito', 'Personal registrado con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::find($id);
        //dd($personal -> nombres);
        return view('personal.mostrar') -> with('personal', $personal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal = Personal::find($id);
        //dd($personal -> nombres);
        return view('personal.editar') -> with('personal', $personal);
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
        $personal = Personal::find($id);

        $personal -> nombres = $request -> nombres;
        $personal -> apellido_paterno = $request -> app;
        $personal -> apellido_materno = $request -> apm;
        $personal -> telefono = $request -> telefono;
        $personal -> celular = $request -> celular;
        $personal -> ci = $request -> ci;
        $personal -> domicilio = $request -> domicilio;
        $personal -> tipo_contrato = $request -> tipo_contrato;
        $personal -> updated_at = date('Y-m-d H:i:s');
        
        $personal -> save();

        return redirect() -> route('mensaje') -> with('mensaje', 'Personal actualizado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personal = Personal::find($id);
        //dd($user);
        $personal -> activo = "N";
        $personal -> save();

        return redirect() -> route('mensaje') -> with('mensaje', 'Personal eliminado correctamente.');
    }
}
