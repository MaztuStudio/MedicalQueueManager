@extends('layout/template')

@section('contenido')
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">

<ul class="nav nav-tabs" id="myTab" role="tablist">


  @for ($i = 1; $i < 4; $i++)
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="c{{$i}}-tab" data-bs-toggle="tab" data-bs-target="#c{{$i}}-tab-pane" type="button" role="tab" aria-controls="c{{$i}}-tab-pane" aria-selected="false">Consultorio {{$i}}</button>
  </li>
  @endfor

</ul>
@if ($mensaje = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{$mensaje}}
</div>
@endif


<div class="tab-content" id="myTabContent">
  @for ($i = 1; $i < 4; $i++)
  <div class="tab-pane fade" id="c{{$i}}-tab-pane" role="tabpanel" aria-labelledby="c{{$i}}-tab" tabindex="0">

    
    <div class="container-sm">
      <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <td>Turno</td>
            <td>Nombre</td>
            <td>Paterno</td>
            <td>Materno</td>
            <td>Telefono</td>
            <td>No Afiliacion</td>
            <td>Consultorio</td>
            <td>Terminar</td>
          </tr>
        </thead>
        <tbody>
    @foreach ($datos as $item)
    @if ($item->consultorio == $i)
          
          <tr>
          <td>{{$item->turno}}</td>
          <td>{{$item->nombre}}</td>
          <td>{{$item->paterno}}</td>
          <td>{{$item->materno}}</td>
          <td>{{$item->telefono}}</td>
          <td>{{$item->afiliacion}}</td>
          <td>{{$item->consultorio}}</td>
          <td><form action="{{route('espera.show',$item->id)}}" method="GET">
            <button class="btn btn-success">Listo</button>
        </form></td>
        </tr>
    @endif
    @endforeach
</tbody>
</table>
</div>
</div>
  </div>
  @endfor
</div>



@endsection