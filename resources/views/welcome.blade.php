@extends('layouts.app')

@section('content')
        
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

  <br>
  <br>    
  <div class="d-flex justify-content-between row p-3 text-white">
     <div class="col">
      <h1>Bienvenidos a mi porfolio</h1>
      <h2>Quien soy</h2><br>
      <p>Diseñadora Gráfica, programadora en html, css, java. 
       Programador de Software, con conocimentos en 
        producción y mantenimiento de elementos o 
        conjuntos de software que requieran integrarse para elaborar aplicaciones.
       </p>
     </div>
     <div class="col p-3 d-flex justify-content-center">
       <img class="shadow p-2 mb-2 bg-body rounded" src="{{ asset('img/fotopersonal1.png') }}" width="300px"  height="350px"  alt="foto-personal">
       <p></p>
     </div>
  </div>

    <br>

    <div class="d-flex justify-content-between row p-3  bg-secondary text-white">
      <div class="col p-3 ">
        <p id="software"><h2>Desarrollo de Software</h2></p>    
        <p>Planificar y crear dos tipos de software:
            <strong>sistemas,</strong> que permiten hardware para funcionar y 
            <strong>aplicaciones, </strong> que realizan tareas de usuario, 
            tales como procesamiento de textos, gestión de base de 
            datos y el diseño en tres dimensiones. </p> 
            <p>
            Escuchar con atención los problemas, proponer y aplicar soluciones
            llevando a cabo el mantenimiento y pruebas para asegurar que los sistemas 
            funcionan correctamente. 
            Configurar el nuevo hardware y software, junto con los usuarios para usarlos.</p>   
      </div>
      <div class="col image d-flex justify-content-center">
        <div class= "fondo-tex shadow p-4 m-2 rounded">
          <p><h2>Hacerlo posible</h2></p>
          <p>Diseño e ilustración de marcas </p>
          <p>Diseño y alojamiento de sitios web</p>
          <p>Automatización de procesos y operaciones</p> 
          <p>Aplicaciones para interactuar con clientes</p> 
          <p>Seguimiento de proyectos</p>
        </div> 
       </div>
    </div>
    <div class="d-flex p-3 fs-5">
      <div class="col">
       <p id="hosting"> <h1>Hosting web</h1></p>
      <p>Servicio de diseño, alojamiento web y registro de dominio. 
          Tu sitio web rápido, seguro y siempre activo.</p>
          <p></p>
      </div>
      <p></p>
      <p></p>
    </div>  


        @endsection