@extends('layout/template')


@section('contenido')
<style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    
    * {
      box-sizing: border-box;
    }
    
    .bg-image {
      background-image: url("https://i.ibb.co/rsBj2Y6/imagen-2023-11-18-011706615-transformed.png");
      filter: blur(8px);
      -webkit-filter: blur(8px);
      height: 100%; 
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .bg-text {
      background-color: rgba(0, 0, 0, 0.536);
      background-color: rgba(0, 0, 0, 0.797);
      color: white;
      font-weight: bold;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      width: 35%;
      padding: 40px;
      text-align: center;
    }
    input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  justify-content: center;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>
<div class="bg-image"></div>

<div class="bg-text">
    <h1 style="font-size:50px">Tomar Turno</h1>
  <p>
    <form action="POST">
        <label for="fname">Su Numero de Afiliacion</label>
        <br>
        <input type="number" name="nAfiliacion" >
        <br>
        <input type="submit" value="Continuar">
    </form>
  </p>
</div>


@endsection