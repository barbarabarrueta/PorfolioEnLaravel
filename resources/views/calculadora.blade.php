@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container shadow p-3 mb-5 bg-body rounded" style="width: 420px;" >
  <h1 class="p-3 mb-2 shadow rounded-3 bg-secondary bg-gradient">Calculadora</h1>
      <form class= "shadow p-3 fondo-calculadora rounded" method="get" action="{{route('calculadora.index')}}"> 
      @csrf
        <div class="p-2">
             <div>Operando 1</div>   
             <input type="text" name="operando1">
        </div>

          <select class="p-1 m-3" name="operador">
                <option value="+">+
                </option>
                <option value="-">-
                </option>
                <option value="">*
                </option>
                <option value="/">/
                </option>
           </select>
        <div class="p-2">
           <div>Operando 2</div>   
           <input type="text" name="operando2">
        </div>
        
        <div class="p-2">
           <input type="submit" value="calcular">
           <div>Resultado</div>   
           <input type="text" name="solucion" value="{{$solucion}}">
        </div>
    </form>
</div>
@endsection