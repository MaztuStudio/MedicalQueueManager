@extends('layout/template')

@section('contenido')
<link rel="stylesheet" href="{{ asset('assets/bootstrap.css')}}">
<link rel="stylesheet" href="{{ asset('assets/custom.css')}}">

<div class="bg-image"></div>

<div class="bg-text">
<h1>¿Esta informacion es correcta?</h1>
<hr>

<table class="table table-light">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Numero de Afiliacion</th>
      <th>Telefono</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>A</td>
      <td>B</td>
      <td>C</td>
    </tr>
  </tbody>
</table>
<form action="#" method="POST">
  <input type="button" class="btn btn-success btn-lg" value="‎ ‎ ‎ Si ‎ ‎ ‎ ">
  <input type="button" class="btn btn-danger btn-lg" value="‎ ‎  No ‎ ‎ " href="#">
</form>
</div>
<
@endsection