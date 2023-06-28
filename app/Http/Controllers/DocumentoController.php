<?php

namespace App\Http\Controllers;

use App\Documento;
use App\BajaMedica;
use App\Curriculum;
use App\DeclaracionJurada;
use App\Memorando;
use App\Servicio;
use App\Vacacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $datos = [
            "tipo" => $request -> tipo,
            "personal_id" => $request -> personal_id,
            "nom_completo" => $request -> nom_completo
        ];
        //dd($datos);
        return view('documento.registrar') -> with('datos', $datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruta = $request -> archivero . "/" . strtoupper($request -> cajon) . "/" . $request -> nom_completo;
        //dd($request -> pdf -> getClientOriginalName());
        //dd($ruta);
        
        $documento = new Documento();

        $documento -> nombre = $request -> nombre;
        $documento -> tipo = $request -> tipo;
        $documento -> archivero = $request -> archivero;
        $documento -> cajon = strtoupper($request -> cajon);
        $documento -> ubicacion = "app/public/" . $ruta . $request -> pdf -> getClientOriginalName();
        $request -> pdf -> move(public_path($ruta), $request -> pdf -> getClientOriginalName());
        $documento -> personal_id = $request -> personal_id;
        $documento -> user_id = Auth::user() -> id;

        $documento -> save();

        $ulti = $documento -> id;
        //dd($ulti);

        switch ($request -> tipo) {
            case 'bajamedica':
                $bajamedica = new BajaMedica();
                $bajamedica -> fecha_inicio = $request -> fecha_inicio;
                $bajamedica -> fecha_fin = $request -> fecha_fin;
                $bajamedica -> documento_id = $ulti;
                $bajamedica -> save();
                break;
            case 'declaracionjurada':
                $declaracionjurada = new DeclaracionJurada();
                $declaracionjurada -> gestion = $request -> gestion;
                $declaracionjurada -> documento_id = $ulti;
                $declaracionjurada -> save();
                break;
            case 'memorando':
                $memorando = new Memorando();
                $memorando -> numero_memorando = $request -> numero_memorando;
                $memorando -> tipo = $request -> tipo_memo;
                $memorando -> documento_id = $ulti;
                $memorando -> save();
                break;
            case 'curriculum':
                $curriculum = new Curriculum();
                $curriculum -> especialidad = $request -> especialidad;
                $curriculum -> titulo_mayor = $request -> titulo_mayor;
                $curriculum -> cantidad_documentos = $request -> cantidad_documentos;
                $curriculum -> documento_id = $ulti;
                $curriculum -> save();
                break;
            case 'servicio':
                $servicio = new Servicio();
                $servicio -> fecha_emitida = $request -> fecha_emitida;
                $servicio -> cantidad_años = $request -> cantidad_años;
                $servicio -> documento_id = $ulti;
                $servicio -> save();
                break;
            case 'vacacion':
                $vacacion = new Vacacion();
                $vacacion -> tipo = $request -> tipo_vacacion;
                $vacacion -> cantidad_dias = $request -> cantidad_dias;
                $vacacion -> documento_id = $ulti;
                $vacacion -> save();
                break;
        }

        return redirect() -> route('principal') -> with('exito', 'Documento registrado con exito.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documento = Documento::find($id);
        //dd($user -> nombres);
        return view('documento.mostrar') -> with('documento', $documento);
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
}
