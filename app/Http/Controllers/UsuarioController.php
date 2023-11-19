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
    public function edit()
    {
        // jala los datos que se van a editar
        return view("confirmData");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
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
}
