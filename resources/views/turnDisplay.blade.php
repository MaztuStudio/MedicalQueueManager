@extends('layout/template')

@section('contenido')
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="c1-tab" data-bs-toggle="tab" data-bs-target="#c1-tab-pane" type="button" role="tab" aria-controls="c1-tab-pane" aria-selected="true">C 1</button>
  </li>
  @for ($i = 2; $i < 12; $i++)
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="c{{$i}}-tab" data-bs-toggle="tab" data-bs-target="#c{{$i}}-tab-pane" type="button" role="tab" aria-controls="c{{$i}}-tab-pane" aria-selected="false">C {{$i}}</button>
  </li>
  @endfor
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="c1-tab-pane" role="tabpanel" aria-labelledby="c1-tab" tabindex="0">
  </div>
  @for ($i = 2; $i < 12; $i++)
  <div class="tab-pane fade" id="c{{$i}}-tab-pane" role="tabpanel" aria-labelledby="c{{$i}}-tab" tabindex="0">
  </div>
  @endfor
</div>



@endsection