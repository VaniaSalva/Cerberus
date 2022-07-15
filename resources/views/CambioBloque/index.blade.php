@extends('adminlte::page')


@section('title', 'Cambio Bloque')

@section('content_header')
   <center> <h1>Cambio Bloque</h1> </center>
@stop

@section('content')

<div class="container">
    <form {{ route('CambioBloque.store')}} method='POST'>
    @method('POST')
    @csrf
        <div class="mb-3">
            <label for="nEmpleado" class="form-label">Numero de empleado:</label>
            <input type="number" class="form-control" id="nEmpleado" onkeyup="buscarEmpleado()" max="999999" name="nEmpleado">
        </div>
        <input type="hidden" id="baja_ads" name="baja_ads">
        <input type="hidden" id="BloqueB" name="BloqueB">
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" readonly>
        </div>
        <div class="mb-3">
            <label for="Adscripcion" class="form-label">Adscripcion</label>
            <input type="text" class="form-control" id="Adscripcion" name="Adscripcion" readonly>
        </div>
        <div class="mb-3">
            <label for="Bloque" class="form-label">Bloque</label>
            <input type="text" class="form-control" id="Bloque" name="Bloque" readonly>
        </div>
        <h2>Bloque Nuevo</h2>
        <div class="mb-3">
            <label for="BloqueN" class="form-label">Bloque</label>
            <select class="form-select" id="BloqueN" name="BloqueN">
                <option value="1"> Bloque 1 </option>
                <option value="3"> Bloque 2 </option>
                <option value="4"> Bloque 3 </option>
                <option value="5"> Estado Mayor </option>
                <option value="6"> 12 por 24 </option>
                <option value="8"> Comisiones </option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="Fecha" name="Fecha">
        </div>
        <div class="mb-3">
            <label for="Motivo" class="form-label">Motivo</label>
            <select class="form-control" id="Motivo" name="Motivo">
                <option value="1"> Cubrir vacante </option>
                <option value="2"> En tanto se resuelva su situación jurídica </option>
                <option value="3"> Por alterar la disciplina </option>
                <option value="4"> Por Incapacidad </option>
                <option value="5"> Cambio denegado </option>
                <option value="6"> Embarazo confirmado </option>
                <option value="7"> No cobrió el perfil </option>
                <option value="8"> Por iniciarse proceso administrativo </option>
                <option value="9"> Necesidades del servicio </option>
                <option value="10"> Por obtener resolutiva en proceso adm. </option>
                <option value="11"> Procedimiento por supuestas conductas irregulares </option>
                <option value="12"> Situación incoada a la C.H.J. </option>
                <option value="13"> Abandono de servicio </option>
                <option value="14"> Comisionado U.C.S </option>
                <option value="15"> Administracion U.H. </option>
                <option value="16"> Cambio Nulificado </option>
                <option value="17"> Curso </option>
                <option value="18"> Curso Mandos </option>
                <option value="19"> Detencion por Secuestro </option>
                <option value="20"> Investigacion Interna I.G. y A.I. </option>
                <option value="21"> Negligencia en el servicio </option>
                <option value="22"> Por Alterar la Disciplina </option>
                <option value="23"> Suspención de funciones </option>
                <option value="24"> A Solicitud del Policia </option>
                <option value="25"> Problemas familiares </option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Oficio" class="form-label">Oficio</label>
            <input type="number" class="form-control" id="Oficio" name="Oficio">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="/" class="btn btn-secondary">Volver</a>
    </form>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script>
    function buscarEmpleado(){
        input = document.getElementById("nEmpleado");
        var empleados = <?= $empleados ?>;
        document.getElementById("Nombre").value = "";
        document.getElementById("Adscripcion").value = '';
        document.getElementById("Bloque").value = '';

        empleados.forEach(element => {
            if(element['num_emp']==input.value){
                document.getElementById("Nombre").value = element['nombre']+' '+element['primer_apellido']+' '+element['segundo_apellido'];
                document.getElementById("Adscripcion").value = element['adscripcion'];
                document.getElementById("Bloque").value = element['bloque'];
                document.getElementById("baja_ads").value = element['alta_ads'];
                document.getElementById("BloqueB").value = element['bloque_alta'];
            }
            }
        )
    }
    
    </script>
@stop

