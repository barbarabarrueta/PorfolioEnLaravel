@extends('layouts.app')

@section('content')
<div class="container p-2">
    <div class="row">
        <div class="col p-4">
         
           @foreach($mensajes as $dato)
            <div class="card justify-content-center m-3" style="width: 50rem;">
                <div class="card-header bg-secondary">
                    Mensaje numero: {{$dato->id}}
                </div>
                <div class="card-header bg-light text-dark">
                    E-mail: {{$dato->Imail}}
                </div>
                <div class="card-body bg-light text-dark">
                    mensaje: {{$dato->Mensaje}}
                </div>
            </div> 
            @endforeach
        </div>
      
    </div>
</div>
@endsection
