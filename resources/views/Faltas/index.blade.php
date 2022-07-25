@extends('adminlte::page')
@Section('title', 'Faltas')

@section('content_header')
   <center> <h1>Faltas</h1> </center>
@stop

@section('content')

<div class="container">
    <form  method='POST' action="{{ route('Faltas.store')}}" accept-charset="UTF-8">
        {{ csrf_field() }}
        @method('POST')
        <div class="mb-3">
            <label for="num_empleado" class="form-label">Numero de empleado</label>
            <input type="number" class="form-control" required id="num_empleado" name="nEmpleado">
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha">
            <div id="emailHelp" class="form-text">Puedes dejarlo vacío para colocar la fecha de hoy. </div>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
            <a href="/dash" class="btn btn-secondary">Volver</a>
    </form>
</div>

@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop