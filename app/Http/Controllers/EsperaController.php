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
        $datos = Espera::orderBy('id', 'asc')->paginate(10);
        return view('welcome', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }
    public function list()
    {
        //
        $datos = Espera::all();
        return view('turnDisplay', compact('datos'));
        
    }

    public function nurselist(Request $request)
    {
        
        $datos = Espera::all();
        return view('nurseDisplay', compact('datos'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $espera = new Espera();
        if ($espera::where('afiliacion', $request->post('id'))->exists()) {
        return redirect()->route("espera.index")->with("failure","El usuario ya tiene una cita para el dia de hoy");
        }else{
        $c1 = session('c1', 1);
        $c2 = session('c2', 1);
        $c3 = session('c3', 1);

        $espera = new Espera();
        $espera->nombre = $request->post('nombre');
        $espera->paterno = $request->post('paterno');
        $espera->materno = $request->post('materno');
        $espera->telefono = $request->post('telefono');
        $espera->afiliacion = $request->post('id');
        $espera->consultorio = $request->post('consultorio');
        switch ($request->post('consultorio')) {
            case 1:
                $espera->turno = $c1;
                $c1++;
                break;

            case 2:
                $espera->turno = $c2;
                $c2++;
                break;

            case 3:
                $espera->turno = $c3;
                $c3++;
                break;
        }

        session(['c1' => $c1, 'c2' => $c2, 'c3' => $c3]);
        $espera->save();
        return redirect()->route("espera.index")->with("success","Agregado Correctamente");
    }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $listo = Espera::find($id);
        return view("delete", compact('listo'));
    }

    public function go(Request $request)
    {
        
        
        if($request->input('pass') == 63034482){
            return redirect()->route("espera.nurselist");
        }else{
            return redirect()->route("espera.login")->with("failure","Contraseña Incorrecta");
        }
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

    public function login(Request $request)
    {
        return view('nurseLogin');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $lista = Espera::find($id);
        $lista->delete();
        return redirect()->route("espera.nurselist")->with("success","Eliminado Correctamente");
        
    }
    
}
