<?php

namespace App\Http\Controllers;

use App\Models\Espera;
use Illuminate\Http\Request;

class EsperaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('turnDisplay');
        /*
        $datos = Personas::orderBy('aPaterno', 'desc')->paginate(3);
        return view('welcome', compact('datos'));
        */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //para guardar datos en la bd
        $afiliacion = $request->input('nombre');
        print_r("adsadads");
        /*
        $espera = new Espera();
        $espera->nombre = $request->post('nombre');
        $espera->paterno = $request->post('paterno');
        $espera->materno = $request->post('materno');
        $espera->telefono = $request->post('telefono');
        $espera->afiliacion = $request->post('id');
        $espera->consultorio = $request->post('consultorio');
        $espera->save();
        return redirect()->route("espera.index")->with("success","Agregado Correctamente");
        */
    }

    /**
     * Display the specified resource.
     */
    public function show(Espera $espera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Espera $espera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Espera $espera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Espera $espera)
    {
        //
    }
}
