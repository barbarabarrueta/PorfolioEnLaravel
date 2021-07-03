@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
          <div class="card-header text-dark h3">Formulario de Contacto</div>

          <div class="card-body">
       <form class="p-2 mb-2 bg-secondary text-white" id="FormContacto" method="POST" action="{{ route('enviodemensaje.store')}}">
            @csrf
       <p id="contacto"> <h1>Contacto</h1></p>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">direccion de mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">coloque el mail donde quiere recibir la informacion.</div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensaje">escribe tu inquietud.</textarea>
      </div>
      <button type="submit" class="btn btn-primary" onclick="document.getElementById('FormContacto').submit();">Enviar</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>


@endsection
