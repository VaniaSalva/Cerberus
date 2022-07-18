@extends('adminlte::page')


@section('title', 'Incapacidad')

@section('content_header')
   <center> <h1>Incapacidad</h1> </center>
@stop

@section('content')

<div class="container">
    <form {{ route('Incapacidad.store')}} method='POST'>
    @method('POST')
    @csrf
    <input type="hidden" id="ads" name="ads">
    <div class="mb-3">
        <label for="nEmpleado" class="form-label">Numero de empleado</label>
        <input type="number" class="form-control" required id="nEmpleado" onkeyup="buscarEmpleado()" max="999999" name="nEmpleado">
    </div>
    <div class="mb-3">
        <label for="Consecutivo" class="form-label">Consecutivo</label>
        <input type="number" class="form-control" id="Consecutivo" name="Consecutivo" required>
    </div>
    <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="Nombre" name="Nombre" readonly>
    </div>
    <div class="mb-3">
        <label for="Adscripcion" class="form-label">Adscripcion</label>
        <input type="text" class="form-control" id="Adscripcion" name="Adscripcion" readonly>
    </div>
    <div class="mb-3">
        <label for="Diagnostico" class="form-label">Diagnostico</label>
        <textarea class="form-control" id="Diagnostico" name="Diagnostico" rows="4" cols="50" required></textarea>
    </div>
    <div class="mb-3">
    <label for="Tipo" class="form-label">Tipo Incapacidad</label>
    <select class="form-control" id="Tipo" name="Tipo" required>
        <option value='1'>ENFERMEDAD GENERAL</option>
        <option value='2'>MATERNIDAD</option>
        <option value='3'>PATERNIDAD</option>
        <option value='4'>COVID19</option>
        <option value='5'>RIESGO DE TRABAJO</option>
        <option value='6'>POR CIRUGIA</option>
        <option value='7'>ACCIDENTE LABORAL</option>
        <option value='8'>ACCIDENTE EN CASA</option>
        <option value='9'>ACCIDENTE EN TRAYECTO</option>
        <option value='10'>MUERTE DE FAMILIAR</option>
        <option value='11'>ACCIDENTE AUTOMOVILISTICO</option>
        <option value='12'>SIN INFORMACION</option>
    </select>
    </div>
    <div class="mb-3">
        <label for="Medico" class="form-label">Nombre medico </label>
        <input type="text" class="form-control" id="Medico" name="Medico" required>
    </div>
    <div class="mb-3">
        <label for="Cedula" class="form-label">Cedula Dr</label>
        <input type="text" class="form-control" id="Cedula" name="Cedula" required>
    </div>
    <div class="mb-3">
        <label for="Inicio" class="form-label">Inicio</label>
        <input type="date" class="form-control" id="Inicio" name="Inicio" required>
    </div>
    <div class="mb-3">
        <label for="Fin" class="form-label">Fin</label>
        <input type="date" class="form-control" id="Fin" name="Fin" required>
    </div>
    <div class="mb-3">
        <label for="Dias" class="form-label">Dias</label>
        <input type="number" class="form-control" id="Dias" name="Dias" required>
    </div>
    <div class="mb-3">
        <label for="Folio" class="form-label">Folio</label>
        <input type="number" class="form-control" id="Folio" name="Folio" required>
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
<script> function buscarEmpleado(){
    input = document.getElementById("nEmpleado");
    var empleados = <?= $empleados ?>;
    document.getElementById("Nombre").value = "";
    document.getElementById("Adscripcion").value = "";

    empleados.forEach(element => {
        if(element['num_emp']==input.value){
            document.getElementById("Nombre").value = element['nombre'];
            document.getElementById("Adscripcion").value = element['adscripcion'];
            document.getElementById("ads").value = element['alta_ads'];
        }
        }
    );
}
</script>
@stop