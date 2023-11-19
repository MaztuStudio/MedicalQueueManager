@extends('layout/template')

@section('contenido')
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">

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
      <th>Consultorio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <form action="{{route('usuario.update',$usuario->id)}}" method="POST">
        @method('PUT')
        @csrf
        <td>{{$usuario->nombre}} {{$usuario->paterno}} {{$usuario->materno}}</td>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->telefono}}</td>
        <td>{{$usuario->consultorio}}</td>
    </tr>
  </tbody>
</table>
<input type="submit" class="btn btn-success btn-lg" value="‎ ‎ ‎ Si ‎ ‎ ‎ ">
<a href="{{route("usuario.index")}}" class="btn btn-danger btn-lg">Volver</a>
</form>
</div>
@endsection