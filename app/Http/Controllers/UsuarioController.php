<?php

namespace App\Http\Controllers;

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
        return view("confirmData", compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            //actualiza los datos en la bd
            
            $usuario = Usuario::find($id);
            $usuario->nombre = $request->post('nombre');
            $usuario->paterno = $request->post('paterno');
            $usuario->materno = $request->post('materno');
            $usuario->telefono = $request->post('telefono');
            $usuario->consultorio = $request->post('consultorio');
            $usuario->save();
            return redirect()->route("personas.index")->with("success","Editado Correctamente");
    
        
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
