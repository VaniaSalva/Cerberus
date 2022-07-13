@extends('theme.base')

@section('content')
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title"> Informacion de empleados</h3>
    </div>
    <div class="panel-body">
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
        <h4>
            <strong>
                <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
                Oops!
            </strong>

        </h4>
        <p>por favor verifique los siguientes datos:</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif
<form method="POST" action="{{route('empleados.store')}}" accept-charset="UTF-8">
    {{csrf_field()}}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Numero de empleado:</label>
                        <input type="text" name="num_emp" class="form-control" placeholder="Ingrese numero de empleado" value="{{old('numero_empleado')}}" autofocus>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" value="{{old('nombre')}}" autofocus>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Primer apellido:</label>
                        <input type="text" name="apellido1" class="form-control" placeholder="Ingrese apellido" value="{{old('apellido1')}}" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Segundo apellido:</label>
                        <input type="text" name="apellido2" class="form-control" placeholder="Ingrese apellido" value="{{old('apellido2')}}" autofocus>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Genero:</label>
                        <select name="genero" id="" class="form-control">
                            <option value="Masculino"  {{old('sexo')=="Masculino"?"selected":''}} >Masculino</option>
                            <option value="Femenino"  {{old('sexo')=="Femenino"?"selected":''}} >Femenino</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Fecha ingreso:</label>
                        <input type="date" name="fecha_ingreso"  class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Cargo:</label>
                        <input type="text" name="cargo" class="form-control" placeholder="Ingrese su cargo">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Estado:</label>
                        <input type="text" name="estado"class="form-control" placeholder="Ingrese estado">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-6" style="margin-left: -20px;">
                            <div class="btn btn-info">Guardar</div>
                        </div>
                        <div class="col-md-6"  style="margin-left: 5px;">
                            <div class="btn btn-danger">Cancelar</div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
</div>

</div>
</form>

</div>
</div>

