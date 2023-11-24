@extends('layout/template')

@section('tituloPagina', "Crear un nuevo registro")

@section("contenido")

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
<br><br><br>
<div class="container">
<div class="card">
    <h5 class="card-header">Eliminar de la lista</h5>
    <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Listo?

                <table class="table table-danger table-sm table-hover">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Numero de Afiliacion</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$listo->nombre}}</td>
                            <td>{{$listo->paterno}}</td>
                            <td>{{$listo->materno}}</td>
                            <td>{{$listo->afiliacion}}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{route('espera.destroy',$listo->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <a href="{{route("espera.go")}}" class="btn btn-primary">Regresar</a>
                    <input type="submit" class="btn btn-danger" value="Eliminar">
                </form>
          </div>
      </p>
    </div>
</div>
</div>

@endsection