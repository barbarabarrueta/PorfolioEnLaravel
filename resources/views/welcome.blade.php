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
     <div class="col p-3 ">
       <img src="{{ asset('img/fotopersonal1.png') }}" width="300px"  height="350px"  alt="foto-personal">
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
      <div class="col p-3 image">
        <div class= "fondo-tex">
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


        <footer>
           <div class="row p-3  justify-content-between bg-secondary fs-5">
             <div class="col align-self-start"> 
                 <p>Proyectos: <a class="text-reset" href="https://www.miramaralquila.com.ar">www.miramaralquila.com.ar</a></p>
             </div> 
             <div class="col align-self-end">
                 <p><img src="{{asset('img/at.svg')}}" height="30px" width="30" alt="aroba"> Mis redes:</img>
                 <a class="text-reset" href="https://www.facebook.com/barbara.barrueta.5/">facebook</a>
                 <a class="text-reset" href="https://github.com/barbarabarrueta">github.com</a></p>
             </div>  
         </div>  
        </footer>

        @endsection