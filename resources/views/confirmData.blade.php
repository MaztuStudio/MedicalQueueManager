@extends('layout/template')

@section('contenido')
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">

<div class="bg-image"></div>

<div class="bg-text">
  @if (is_null($usuario))
  <h1>Este Usuario No Existe</h1>
  <hr>
  <a href="{{route("usuario.index")}}" class="btn btn-danger btn-lg">Volver</a>
</div>
  @else
<h1>¿Esta informacion es correcta?</h1>
<hr>
<div class="table-responsive">
<table class="table table-light table-sm" style="width=">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido P</th>
      <th>Apellido M</th>
      <th>Numero de Afiliacion</th>
      <th>Telefono</th>
      <th>Consultorio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <form action="{{route('espera.store')}}" method="POST">
        @csrf
        <td><input type="text" name="nombre" value="{{$usuario->nombre}}" disabled></td>
        <td><input type="text" name="paterno" value="{{$usuario->paterno}}" disabled></td>
        <td><input type="text" name="materno" value="{{$usuario->materno}}" disabled></td>
        <td><input type="text" name="id" value="{{$usuario->id}}" disabled></td>
        <td><input type="text" name="telefono" value="{{$usuario->telefono}}" disabled></td>
        <td><input type="text" name="consultorio" value="{{$usuario->consultorio}}" disabled></td>
    </tr>
  </tbody>
</table>
</div>
<input type="submit" class="btn btn-success btn-lg" value="‎ ‎ ‎ Si ‎ ‎ ‎ ">
<a href="{{route("usuario.index")}}" class="btn btn-danger btn-lg">Volver</a>
</form>
</div>
@endif
@endsection