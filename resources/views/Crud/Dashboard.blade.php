@extends('adminlte::page')


@section('title', 'Institución Policial Estatal Fuerza Civil')

@section('content_header')
   <center> <h1>Institución Policial Estatal Fuerza Civil</h1> </center>
@stop

@section('content')

<p>
   <section class="content">
      <div class="container-fluid">

      <div class="row">
      <div class="col-lg-3 col-6">

      <div class="small-box bg-info">
      <div class="inner">
      <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulario</font></font></h3>
      <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Datos Personales</font></font></p>
      </div>
      <div class="icon">
      <i class="ion ion-bag"></i>
      </div>
      <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Más información</font></font><i class="fas fa-arrow-circle-right"></i></a>
      </div>
      </div>

      <div class="col-lg-3 col-6">

      <div class="small-box bg-success">
      <div class="inner">
      <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulario</font></font><sup style="font-size: 20px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></sup></h3>
      <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inventario de Armas</font></font></p>
      </div>
      <div class="icon">
      <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Más información</font></font><i class="fas fa-arrow-circle-right"></i></a>
      </div>
      </div>

      <div class="col-lg-3 col-6">

      <div class="small-box bg-warning">
      <div class="inner">
      <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulario</font></font></h3>
      <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Altas del Personal</font></font></p>
      </div>
      <div class="icon">
      <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Más información</font></font><i class="fas fa-arrow-circle-right"></i></a>
      </div>
      </div>

      <div class="col-lg-3 col-6">

      <div class="small-box bg-danger">
      <div class="inner">
      <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulario</font></font></h3>
      <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bajas del Personal</font></font></p>
      </div>
      <div class="icon">
      <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Más información</font></font><i class="fas fa-arrow-circle-right"></i></a>
      </div>
      </div>
      </div>
      <div class="content">
          <div class="container-fluid">
         
      <div class="card">
      <div class="card-header ui-sortable-handle" style="cursor: move;">
      <h3 class="card-title">
      <i class="ion ion-clipboard mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
      Lista de actividades
      </font></font></h3>
      <div class="card-tools">
      <ul class="pagination pagination-sm">
      <li class="page-item"><a href="#" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">«</font></font></a></li>
      <li class="page-item"><a href="#" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a></li>
      <li class="page-item"><a href="#" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></a></li>
      <li class="page-item"><a href="#" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></a></li>
      <li class="page-item"><a href="#" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">»</font></font></a></li>
      </ul>
      </div>
      </div>

      <div class="card-body">
      <ul class="todo-list ui-sortable" data-widget="todo-list">
      <li>

      <span class="handle ui-sortable-handle">
      <i class="fas fa-ellipsis-v"></i>
      <i class="fas fa-ellipsis-v"></i>
      </span>

      <div class="icheck-primary d-inline ml-2">
      <input type="checkbox" value="" name="todo1" id="todoCheck1">
      <label for="todoCheck1"></label>
      </div>

      <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Diseña un buen tema</font></font></span>

      <small class="badge badge-danger"><i class="far fa-clock"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 minutos</font></font></small>

      <div class="tools">
      <i class="fas fa-edit"></i>
      <i class="fas fa-trash-o"></i>
      </div>
      </li>
      <li class="done">
      <span class="handle ui-sortable-handle">
      <i class="fas fa-ellipsis-v"></i>
      <i class="fas fa-ellipsis-v"></i>
      </span>
      <div class="icheck-primary d-inline ml-2">
      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked="">
      <label for="todoCheck2"></label>
      </div>
      <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hacer que el tema responda</font></font></span>
      <small class="badge badge-info"><i class="far fa-clock"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4 horas</font></font></small>
      <div class="tools">
      <i class="fas fa-edit"></i>
      <i class="fas fa-trash-o"></i>
      </div>
      </li>
      <li>
      <span class="handle ui-sortable-handle">
      <i class="fas fa-ellipsis-v"></i>
      <i class="fas fa-ellipsis-v"></i>
      </span>
      <div class="icheck-primary d-inline ml-2">
      <input type="checkbox" value="" name="todo3" id="todoCheck3">
      <label for="todoCheck3"></label>
      </div>
      <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Deja que el tema brille como una estrella</font></font></span>
      <small class="badge badge-warning"><i class="far fa-clock"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 día</font></font></small>
      <div class="tools">
      <i class="fas fa-edit"></i>
      <i class="fas fa-trash-o"></i>
      </div>
      </li>
      <li>
      <span class="handle ui-sortable-handle">
      <i class="fas fa-ellipsis-v"></i>
      <i class="fas fa-ellipsis-v"></i>
      </span>
      <div class="icheck-primary d-inline ml-2">
      <input type="checkbox" value="" name="todo4" id="todoCheck4">
      <label for="todoCheck4"></label>
      </div>
      <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Deja que el tema brille como una estrella</font></font></span>
      <small class="badge badge-success"><i class="far fa-clock"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3 días</font></font></small>
      <div class="tools">
      <i class="fas fa-edit"></i>
      <i class="fas fa-trash-o"></i>
      </div>
      </li>
      <li>
      <span class="handle ui-sortable-handle">
      <i class="fas fa-ellipsis-v"></i>
      <i class="fas fa-ellipsis-v"></i>
      </span>
      <div class="icheck-primary d-inline ml-2">
      <input type="checkbox" value="" name="todo5" id="todoCheck5">
      <label for="todoCheck5"></label>
      </div>
      <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Revisa tus mensajes y notificaciones</font></font></span>
      <small class="badge badge-primary"><i class="far fa-clock"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 semana</font></font></small>
      <div class="tools">
      <i class="fas fa-edit"></i>
      <i class="fas fa-trash-o"></i>
      </div>
      </li>
      <li>
      <span class="handle ui-sortable-handle">
      <i class="fas fa-ellipsis-v"></i>
      <i class="fas fa-ellipsis-v"></i>
      </span>
      <div class="icheck-primary d-inline ml-2">
       <input type="checkbox" value="" name="todo6" id="todoCheck6">
      <label for="todoCheck6"></label>
      </div>
      <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Deja que el tema brille como una estrella</font></font></span>
      <small class="badge badge-secondary"><i class="far fa-clock"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 mes</font></font></small>
      <div class="tools">
      <i class="fas fa-edit"></i>
      <i class="fas fa-trash-o"></i>
      </div>
      </li>
      </ul>
      </div>

     
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi'); </script>
@stop


