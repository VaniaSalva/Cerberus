
<div class="container">
        <form {{ route('Incapacidad.store')}} method='POST'>
        @method('POST')
        @csrf
         <div class="mb-3">
            <label for="nEmpleado" class="form-label">Numero de empleado</label>
            <input type="number" class="form-control" id="nEmpleado" onkeyup="buscarEmpleado()" max="999999" name="nEmpleado">
        </div>
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" readonly>
        </div>
        <div class="mb-3">
            <label for="Periodo" class="form-label">Periodo</label>
            <select class="form-control" id="Periodo" name="Periodo">
            <option value='1er Periodo'>1er Periodo</option>
            <option value='2do Periodo'>2do Periodo</option>
            <option value='3er Periodo'>3er Periodo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Ubicacion" class="form-label">Ubicacion</label>
            <select class="form-control" id="Ubicacion" name="Ubicacion">
            <option value="no">Seleccione uno...</option>
      <option value="2">Aguascalientes</option>
      <option value="3">Baja California</option>
      <option value="4">Baja California Sur</option>
      <option value="5">Campeche</option>
      <option value="6">Chiapas</option>
      <option value="7">Chihuahua</option>
      <option value="8">Ciudad de México</option>
      <option value="9">Coahuila</option>
      <option value="10">Colima</option>
      <option value="11">Durango</option>
      <option value="16">Estado de México</option>
      <option value="12">Guanajuato</option>
      <option value="13">Guerrero</option>
      <option value="14">Hidalgo</option>
      <option value="15">Jalisco</option>
      <option value="17">Michoacán</option>
      <option value="18">Morelos</option>
      <option value="19">Nayarit</option>
      <option value="20">Nuevo León</option>
      <option value="21">Oaxaca</option>
      <option value="22">Puebla</option>
      <option value="23">Querétaro</option>
      <option value="24">Quintana Roo</option>
      <option value="25">San Luis Potosí</option>
      <option value="26">Sinaloa</option>
      <option value="27">Sonora</option>
      <option value="28">Tabasco</option>
      <option value="29">Tamaulipas</option>
      <option value="30">Tlaxcala</option>
      <option value="31">Veracruz</option>
      <option value="32">Yucatán</option>
      <option value="33">Zacatecas</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Inicio" class="form-label">Inicio</label>
            <input type="date" class="form-control" id="Inicio" name="Inicio">
        </div>
        <div class="mb-3">
            <label for="Fin" class="form-label">Fin</label>
            <input type="date" class="form-control" id="Fin" name="Fin">
        </div>
        <div class="mb-3">
            <label for="Folio" class="form-label">Folio</label>
            <input type="number" class="form-control" id="Folio" name="Folio">
        </div>
         <button type="submit" class="btn btn-success">Guardar</button>
        <a href="/" class="btn btn-secondary">Volver</a>
        </form>
</div>
<script>
    console.log(<?= $empleados ?>);
    function buscarEmpleado(){
        input = document.getElementById("nEmpleado");
        var empleados = <?= $empleados ?>;
        document.getElementById("Nombre").value = "";

        empleados.forEach(element => {
            if(element['num_emp']==input.value){
                document.getElementById("Nombre").value = element['nombre']+element['primer_apellido']+' '+element['segundo_apellido'];
            }
            }
        )
    }
    </script>