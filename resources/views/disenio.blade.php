@extends('layouts.app')

@section('content')


<div class="container">
    <h2>Diseño</h2>
           <p>Desarrolo de sistemas de diseño y comunicación, 
               tanto impreso, como digital y web, orientado a diferentes mercados 
               y con diferentes contenidos y objetivos.</p>
          <p> Construcción de una marca, diseño de material promocional y producción gráfica</p>
</div> 
<div class="container">
    <div class="row">
        <div class="col-md p-2 " >
           <img src="./img/miramaralquila.png" width="100%" >
        </div>
        <div class="col-md p-2 ">
           <img src="./img/drselecciones.png" width="100%" >
        </div>
        <div class="col-md p-2 ">
           <img src="./img/pag-web3.png" width="100%" >
        </div>
    </div>
    <p></p>
    <div class="row justify-content-center">
        <div class="col p-2 ">
          <img src="./img/afiche-realismomaagico.jpg" height="320px">
        </div>
        <div class="col p-2 ">
          <img src="./img/folleto1.png" height="320px">
        </div>
        <div class="col p-2 ">
            <img src="./img/folleto2.png" height="320px">
        </div>
        <div class="col">
          <img src="./img/imagencontexto1.jpg" height="320px">
        </div>
      </div>
      <p></p>
  </div>

    <footer>
           <div class="row p-3  justify-content-between bg-secondary fs-5">
             <div class="col align-self-start"> 
                 <p>Proyectos: <a class="text-reset" href="https://www.miramaralquila.com.ar">www.miramaralquila.com.ar</a></p>
             </div> 
             <div class="col align-self-end">
                 <p><img src="img/at.svg" height="30px" width="30" alt="aroba"> Mis redes:</img>
                 <a class="text-reset" href="https://www.facebook.com/barbara.barrueta.5/">facebook</a>
                 <a class="text-reset" href="https://github.com/barbarabarrueta">github.com</a></p>
             </div>  
         </div>  
        </footer>

@endsection