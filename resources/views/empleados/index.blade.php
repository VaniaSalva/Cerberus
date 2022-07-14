@extends('adminlte::page')


@section('title', 'Relacion de personal')

@section('content_header')
   <center> <h1>Relacion de personal</h1> </center>
@stop

@section('content')
        <div class="container">
        <table id="exportable" class="table table-striped" >
            <thead>
                <tr>
                    <th>No. Organico</th>
                    <th>No. Emp.</th>
                    <th>Grado</th>
                    <th>Nombre</th>
                    <th>P. Apellido</th>
                    <th>S. Apellido</th>
                    <th>Adscripción</th>
                    <th>Alta ADS</th>
                    <th>Apartado</th>
                    <th>Adscrip. Anterior</th>
                    <th>Alta ADS</th>
                    <th>Cargo</th>
                    <th>Tipo Ingreso</th>
                    <th>Rol</th>
                    <th>Genero</th>
                    <th>Fecha Ingreso</th>
                    <th style="width: 300px">Fecha Ingreso A Campo</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>

            @forelse ($empleados as $key => $empleado)
                 <tr>
                        <td>
                            {{$empleado->num_org ?? 'No se econtró este dato'}}
                        </td>
                         <td>
                            {{$empleado->num_emp ?? 'No se econtró este dato'}}
                        </td>
                         <td>
                            {{$empleado->grado ?? 'No se econtró este dato'}}
                        </td>
                         <td>
                            {{$empleado->nombre ?? 'No se econtró este dato'}}
                        </td>
                         <td>
                            {{$empleado->primer_apellido ?? 'No se econtró este dato'}}
                        </td>
                         <td>
                            {{$empleado->segundo_apellido ?? 'No se econtró este dato'}}
                        </td>
                         <td>
                            {{$empleado->alta ?? 'No se econtró este dato'}}
                        </td>
                        <td>
                            {{date('d/m/Y',strtotime($empleado->fecha_ingreso))
                            ?? 'No se econtró este dato'}}
                        </td>
                        <td>
                            {{$empleado->funcion ?? 'No se econtró este dato'}}
                        </td>
                        <td>
                            {{$empleado->adscripcion ?? 'No se econtró este dato'}}
                        </td>
                        <td>
                            {{date('d/m/Y',strtotime($empleado->fecha)) ?? 'No se econtró este dato'}}
                        </td>
                        <td>
                            {{$empleado->cargo ?? 'No se econtró este dato'}}
                        </td>
                        <td>
                            {{$empleado->tipo_ingresos ?? 'No se econtró este dato'}}
                        </td>
                        <td>
                            {{$empleado->bloque ?? 'No se econtró este dato'}}
                        </td>
                         <td>
                            {{$empleado->genero ?? 'No se econtró este dato'}}
                        </td>
                        <td>
                            {{date('d/m/Y',strtotime($empleado->fecha_ingreso)) ?? 'No se econtró este dato'}}
                        </td>
                        <td>
                            {{ date('d/m/Y',strtotime($empleado->fecha_ingresi_fc)) ?? 'No se econtró este dato'}}
                        </td>
                        <td>
                            {{$empleado->estado ?? 'No se econtró este dato'}}
                        </td>
                </tr>
            @empty
                    <tr>
                        <td colspan="16" class="text-center">
                            No hay registros.
                        </td>
                    </tr>
            @endforelse
            </tbody>
        </table>
    </div>
       
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<style>
    .left-col {
    float: left;
    width: 25%;
}
 
.center-col {
    width: 50%;
}
 
</style>
@stop
@section('js')
<script> console.log('Hi'); </script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script>
   


$(document).ready(function () {
$('#exportable').DataTable({
ordering: false,
info: false,
scrollX: true,
language: {
    url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-MX.json'
},
"pageLength": 5,
"bLengthChange": false,
"pagingType": "full_numbers",
dom: '<"top"<"left-col"B><"center-col"l><"right-col"f>>rtip',
buttons: [
    {
        extend: 'excel',
        title: 'Relacion de personal',
        text: 'Exportar',
        className: 'btn btn-primary'
    }
]
});
});

</script>
@stop

