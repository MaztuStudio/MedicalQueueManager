@extends('layout/template')


@section('contenido')
<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
<div class="bg-image"></div>

<div class="bg-text">
    <h1 style="font-size:50px">Tomar Turno</h1>
  <p>
    <form action="{{route('usuario.edit')}}" method="GET">
        <label for="fname">Su Numero de Afiliacion</label>
        <br>
        <input type="number" name="nAfiliacion" required>
        <br>
  <input type="submit" class="btn btn-success btn-lg" value="Continuar">
  
    </form>
  </p>
</div>


@endsection