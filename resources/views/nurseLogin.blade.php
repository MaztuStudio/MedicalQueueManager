@extends('layout/template')


@section('contenido')
<link rel="stylesheet" href="{{ asset('assets/css/login.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">


<div class="bg-image"></div>

<div class="bg-text">
    @if ($mensaje = Session::get('failure'))
    <div class="alert alert-danger" role="alert">
        {{$mensaje}}
    </div>
    @endif
    <form action="{{route('espera.go')}}" method="GET">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Ingrese la Contraseña</label>
        <input type="number" name="pass" class="form-control" >
      </div>
      
      <button type="submit" class="btn btn-primary mb-3">Ingresar</button>
</div>

@endsection