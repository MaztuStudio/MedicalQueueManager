@extends('layout/template')


@section('contenido')
<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
<div class="bg-image"></div>


<div class="bg-text">
  @if ($mensaje = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{$mensaje}}
</div>
@endif
    <h1 style="font-size:50px">Tomar Turno</h1>
  <p>
    <form action="{{route('usuario.edit')}}" method="GET">
        <label for="fname">Su Numero de Afiliacion</label>
        <br>
        <input type="number" name="nAfiliacion" required>
        <br>
        <input type="submit" class="btn btn-success btn-lg" value="Continuar">
    </form>
    <br>
    <a href="{{route("espera.list")}}" class="btn btn-outline-light">Ver Lista</a>
  </p>
</div>


@endsection