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
          <div class="row">
          <div class="col-lg-6">
          <div class="card">
          <div class="card-header border-0">
          <div class="d-flex justify-content-between">
          <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visitantes de la tienda en línea</font></font></h3>
          <a href="javascript:void(0);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vista del informe</font></font></a>
          </div>
          </div>
          <div class="card-body">
          <div class="d-flex">
          <p class="d-flex flex-column">
          <span class="text-bold text-lg"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">820</font></font></span>
          <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Visitantes a lo largo del tiempo</font></font></span>
          </p>
          <p class="ml-auto d-flex flex-column text-right">
          <span class="text-success">
          <i class="fas fa-arrow-up"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12,5%
          </font></font></span>
          <span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Desde la semana pasada</font></font></span>
          </p>
          </div>

          <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <canvas id="visitors-chart" height="200" width="723" style="display: block; width: 723px; height: 200px;" class="chartjs-render-monitor"></canvas>
          </div>
          <div class="d-flex flex-row justify-content-end">
          <span class="mr-2">
          <i class="fas fa-square text-primary"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Esta semana
          </font></font></span>
          <span>
          <i class="fas fa-square text-gray"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">La semana pasada
          </font></font></span>
          </div>
          </div>
          </div>

          <div class="card">
          <div class="card-header border-0">
          <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Productos</font></font></h3>
          <div class="card-tools">
          <a href="#" class="btn btn-tool btn-sm">
          <i class="fas fa-download"></i>
          </a>
          <a href="#" class="btn btn-tool btn-sm">
          <i class="fas fa-bars"></i>
          </a>
          </div>
          </div>
          <div class="card-body table-responsive p-0">
          <table class="table table-striped table-valign-middle">
          <thead>
          <tr>
          <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Producto</font></font></th>
          <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Precio</font></font></th>
          <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ventas</font></font></th>
          <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Más</font></font></th>
          </tr>
          </thead>
          <tbody>
          <tr>
          <td>
          <img src="dist/img/default-150x150.png" alt="Producto 1" class="img-circle img-size-32 mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          algún producto
          </font></font></td>
          <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$13 USD</font></font></td>
          <td>
          <small class="text-success mr-1">
          <i class="fas fa-arrow-up"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          12%
          </font></font></small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          12,000 Vendido
          </font></font></td>
          <td>
          <a href="#" class="text-muted">
          <i class="fas fa-search"></i>
          </a>
          </td>
          </tr>
          <tr>
          <td>
          <img src="dist/img/default-150x150.png" alt="Producto 1" class="img-circle img-size-32 mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          Otro producto
          </font></font></td>
          <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$29 USD</font></font></td>
          <td>
          <small class="text-warning mr-1">
          <i class="fas fa-arrow-down"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          0,5%
          </font></font></small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          123.234 Vendidos
          </font></font></td>
          <td>
          <a href="#" class="text-muted">
          <i class="fas fa-search"></i>
          </a>
          </td>
          </tr>
          <tr>
          <td>
          <img src="dist/img/default-150x150.png" alt="Producto 1" class="img-circle img-size-32 mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          Producto increíble
          </font></font></td>
          <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$1,230 USD</font></font></td>
          <td>
          <small class="text-danger mr-1">
          <i class="fas fa-arrow-down"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          3%
          </font></font></small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          198 Vendido
          </font></font></td>
          <td>
          <a href="#" class="text-muted">
          <i class="fas fa-search"></i>
          </a>
          </td>
          </tr>
          <tr>
          <td>
          <img src="dist/img/default-150x150.png" alt="Producto 1" class="img-circle img-size-32 mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          Artículo perfecto
          </font></font><span class="badge bg-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">NUEVO</font></font></span>
          </td>
          <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$199 USD</font></font></td>
          <td>
          <small class="text-success mr-1">
          <i class="fas fa-arrow-up"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          63%
          </font></font></small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          87 Vendido
          </font></font></td>
          <td>
          <a href="#" class="text-muted">
          <i class="fas fa-search"></i>
          </a>
          </td>
          </tr>
          </tbody>
          </table>
          </div>
          </div>

          </div>

          <div class="col-lg-6">
          <div class="card">
          <div class="card-header border-0">
          <div class="d-flex justify-content-between">
          <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ventas</font></font></h3>
          <a href="javascript:void(0);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vista del informe</font></font></a>
          </div>
          </div>
          <div class="card-body">
          <div class="d-flex">
          <p class="d-flex flex-column">
          <span class="text-bold text-lg"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$18,230.00</font></font></span>
          <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ventas a lo largo del tiempo</font></font></span>
          </p>
          <p class="ml-auto d-flex flex-column text-right">
          <span class="text-success">
          <i class="fas fa-arrow-up"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33,1%
          </font></font></span>
          <span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Desde el mes pasado</font></font></span>
          </p>
          </div>

          <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <canvas id="sales-chart" height="200" style="display: block; width: 723px; height: 200px;" width="723" class="chartjs-render-monitor"></canvas>
          </div>
          <div class="d-flex flex-row justify-content-end">
          <span class="mr-2">
          <i class="fas fa-square text-primary"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Este año
          </font></font></span>
          <span>
          <i class="fas fa-square text-gray"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">El año pasado
          </font></font></span>
          </div>
          </div>
          </div>

          <div class="card">
          <div class="card-header border-0">
          <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descripción general de la tienda en línea</font></font></h3>
          <div class="card-tools">
          <a href="#" class="btn btn-sm btn-tool">
          <i class="fas fa-download"></i>
          </a>
          <a href="#" class="btn btn-sm btn-tool">
          <i class="fas fa-bars"></i>
          </a>
          </div>
          </div>
          <div class="card-body">
          <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
          <p class="text-success text-xl">
          <i class="ion ion-ios-refresh-empty"></i>
          </p>
          <p class="d-flex flex-column text-right">
           <span class="font-weight-bold">
          <i class="ion ion-android-arrow-up text-success"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12%
          </font></font></span>
          <span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TASA DE CONVERSIÓN</font></font></span>
          </p>
          </div>

          <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
          <p class="text-warning text-xl">
          <i class="ion ion-ios-cart-outline"></i>
          </p>
          <p class="d-flex flex-column text-right">
          <span class="font-weight-bold">
          <i class="ion ion-android-arrow-up text-warning"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0,8%
          </font></font></span>
          <span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TASA DE VENTA</font></font></span>
          </p>
          </div>

          <div class="d-flex justify-content-between align-items-center mb-0">
          <p class="text-danger text-xl">
          <i class="ion ion-ios-people-outline"></i>
          </p>
          <p class="d-flex flex-column text-right">
          <span class="font-weight-bold">
          <i class="ion ion-android-arrow-down text-danger"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1%
          </font></font></span>
          <span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TASA DE REGISTRO</font></font></span>
          </p>
          </div>

          </div>
          </div>
          </div>

          </div>

          </div>

          </div>

      <div class="card">
      <div class="card-header ui-sortable-handle" style="cursor: move;">
      <h3 class="card-title">
      <i class="ion ion-clipboard mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
      Lista de quehaceres
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

      <div class="card bg-gradient-success">
      <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
      <h3 class="card-title">
      <i class="far fa-calendar-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
      Calendario
      </font></font></h3>

      <div class="card-tools">

      <div class="btn-group">
      <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
      <i class="fas fa-bars"></i>
      </button>
      <div class="dropdown-menu" role="menu">
      <a href="#" class="dropdown-item">Add new event</a>
      <a href="#" class="dropdown-item">Clear events</a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">View calendar</a>
      </div>
      </div>
      <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
      <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
      <i class="fas fa-times"></i>
      </button>
      </div>

      </div>

      <div class="card-body pt-0">

      <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Mes anterior"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Seleccione mes"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">junio 2022</font></font></th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Próximo mes"></span></th></tr><tr><th class="dow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">do</font></font></th><th class="dow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mes</font></font></th><th class="dow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ma</font></font></th><th class="dow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nosotros</font></font></th><th class="dow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">el</font></font></th><th class="dow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">fr</font></font></th><th class="dow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sá.</font></font></th></tr></thead><tbody><tr><td data-action="selectDay" data-day="05/29/2022" class="day old weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">29</font></font></td><td data-action="selectDay" data-day="05/30/2022" class="day old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></td><td data-action="selectDay" data-day="05/31/2022" class="day old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31</font></font></td><td data-action="selectDay" data-day="06/01/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td><td data-action="selectDay" data-day="06/02/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td><td data-action="selectDay" data-day="06/03/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td><td data-action="selectDay" data-day="06/04/2022" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td></tr><tr><td data-action="selectDay" data-day="06/05/2022" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td><td data-action="selectDay" data-day="06/06/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></td><td data-action="selectDay" data-day="06/07/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></td><td data-action="selectDay" data-day="06/08/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></td><td data-action="selectDay" data-day="06/09/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></td><td data-action="selectDay" data-day="06/10/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></td><td data-action="selectDay" data-day="06/11/2022" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></td></tr><tr><td data-action="selectDay" data-day="06/12/2022" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></td><td data-action="selectDay" data-day="06/13/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13</font></font></td><td data-action="selectDay" data-day="06/14/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></td><td data-action="selectDay" data-day="06/15/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></td><td data-action="selectDay" data-day="06/16/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dieciséis</font></font></td><td data-action="selectDay" data-day="06/17/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></td><td data-action="selectDay" data-day="06/18/2022" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18</font></font></td></tr><tr><td data-action="selectDay" data-day="06/19/2022" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19</font></font></td><td data-action="selectDay" data-day="06/20/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></td><td data-action="selectDay" data-day="06/21/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21</font></font></td><td data-action="selectDay" data-day="06/22/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22</font></font></td><td data-action="selectDay" data-day="06/23/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">23</font></font></td><td data-action="selectDay" data-day="06/24/2022" class="day active today"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24</font></font></td><td data-action="selectDay" data-day="06/25/2022" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></td></tr><tr><td data-action="selectDay" data-day="06/26/2022" class="day weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26</font></font></td><td data-action="selectDay" data-day="06/27/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">27</font></font></td><td data-action="selectDay" data-day="06/28/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28</font></font></td><td data-action="selectDay" data-day="06/29/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">29</font></font></td><td data-action="selectDay" data-day="06/30/2022" class="day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></td><td data-action="selectDay" data-day="07/01/2022" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td><td data-action="selectDay" data-day="07/02/2022" class="day new weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td></tr><tr><td data-action="selectDay" data-day="07/03/2022" class="day new weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td><td data-action="selectDay" data-day="07/04/2022" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td><td data-action="selectDay" data-day="07/05/2022" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td><td data-action="selectDay" data-day="07/06/2022" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></td><td data-action="selectDay" data-day="07/07/2022" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></td><td data-action="selectDay" data-day="07/08/2022" class="day new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></td><td data-action="selectDay" data-day="07/09/2022" class="day new weekend"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2022</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month active">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year active">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
      </div>

      </div>

      </section>

      </div>

      </div>
      </section>
</p>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi'); </script>
@stop


