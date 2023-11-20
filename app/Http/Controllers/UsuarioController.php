<?php

namespace App\Http\Controllers;

use App\Models\Espera;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //pagina pricipal
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // el html del formulario donde nosotros agregamos datos
        
    }

    public function turnDisplay()
    {
       // el html de la tabla para la el succes del registro
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //para guardar datos en la bd
    }

    /**
     * Display the specified resource.
     */
    public function show($afiliacion)
    {
        //jalar un registro de la tabla
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        // jala los datos que se van a editar
        $afiliacion = $request->input('nAfiliacion');
        $usuario = Usuario::find($afiliacion);
        $tiempo = Espera::where('consultorio', $usuario->consultorio)->pluck('tiempo')->all();
        //print_r($tiempo);
        //print_r($usuario->consultorio);
        return view("confirmData", compact('usuario', 'tiempo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            //actualiza los datos en la bd
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //elimina un registro
    }
    
    public function list()
    {
        return view('turnDisplay');
    }
}
