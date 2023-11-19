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
        <td><input type="text" name="nombre" class="form-control" value="{{$usuario->nombre}}" ></td>
        <td><input type="text" name="paterno" class="form-control" value="{{$usuario->paterno}}" ></td>
        <td><input type="text" name="materno" class="form-control" value="{{$usuario->materno}}" ></td>
        <td><input type="text" name="id" class="form-control" value="{{$usuario->id}}" ></td>
        <td><input type="text" name="telefono" class="form-control" value="{{$usuario->telefono}}" ></td>
        <td><input type="text" name="consultorio" class="form-control" value="{{$usuario->consultorio}}" ></td>
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

