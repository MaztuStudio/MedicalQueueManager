@extends('layout/template')


@section('contenido')
<link rel="stylesheet" href="{{ asset('assets/custom.css')}}">
<div class="bg-image"></div>

<div class="bg-text">
    <h1 style="font-size:50px">Tomar Turno</h1>
  <p>
    <form action="#" method="POST">
        <label for="fname">Su Numero de Afiliacion</label>
        <br>
        <input type="number" name="nAfiliacion" >
        <br>
        <input type="submit" value="Continuar">
    </form>
  </p>
</div>


@endsection