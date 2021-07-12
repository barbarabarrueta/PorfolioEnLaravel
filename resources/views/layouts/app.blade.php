<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>BARBARA</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/appBarby.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


         <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
            <div class="container-fluid">
                 <a class="nombre" href="{{ url('/') }}">Barbara Barrueta</a>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link text-dark" aria-current="page" href="{{ url('/#software') }}">Desarrollo de Software</a></li>
                   <li class="nav-item">
                      <a class="nav-link text-dark" aria-current="page" href="{{ url('/#hosting') }}">Diseño y alojamiento de sitios web</a></li>
                   <li class="nav-item">
                      <a class="nav-link text-dark" aria-current="page" href="{{ url('/disenio') }}" tabindex="-1" 
                       aria-disabled="true">Diseño gráfico</a></li>
                   <li class="nav-item">
                      <a class=" ms-5 btn btn-outline-dark" href="{{ url('/contacto') }}" role="button">Contacto</a>
                   </li>
                 </ul>
              </div>
           </div>
        </nav>

      
        <main class="py-4">
            @yield('content')
        </main>   
        

<footer>
      <div class="row p-3  justify-content-between bg-secondary fs-5">
          <div class="col align-self-start"> 
             <p>Proyectos: <a class="text-reset" href="https://www.miramaralquila.com.ar">www.miramaralquila.com.ar</a></p>
          </div> 
          <div class="col d-flex justify-content-center">
             <p><img src="img/at.svg" height="30px" width="30" alt="aroba"> Mis redes:</img>
             <a class="text-reset" href="https://www.facebook.com/barbara.barrueta.5/">facebook </a> 
             -- 
             <a class="text-reset" href="https://github.com/barbarabarrueta">github.com</a></p>
          </div>  
      </div>  
</footer>
     
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
