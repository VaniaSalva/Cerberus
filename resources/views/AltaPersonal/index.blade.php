
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title"> Alta de Personal</h3>
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
            <form method="POST" action="{{ route('AltaPersonal.store') }}" accept-charset="UTF-8">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Numero de empleado:</label>
                            <input type="text" id="num_emp" name="num_emp" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="grado">Grado:</label>
                            <select name="grado" id="grado" class="form-control">
                                <option value="1">PROMOCION</option>
                                <option value="2">AUDITADO</option>
                                <option value="3">ASIMILADO</option>
                                <option value="4">ESCOLTAS</option>
                                <option value="5">SIN INFORMACION</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cargo">Cargo:</label>
                            <select name="cargo" id="cargo" class="form-control">
                                <option value="1">ADMINISTRATIVO</option>
                                <option value="2">ANALISTA</option>
                                <option value="3">INVESTIGADOR</option>
                                <option value="4">OPERATIVO</option>
                                <option value="5">P.E.C</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Nombre:</label>
                            <input type="text" name="nombre" id="nombre"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="apellido_p">Apellido Paterno:</label>
                            <input type="text" name="apellido_p" id="apellido_p"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="apellido_m">Apellido Materno:</label>
                            <input type="text" name="apellido_m" id="apellido_m"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="genero">Genero:</label>
                            <select name="genero" id="genero">
                                <option value="MASCULINO">MASCULINO</option>
                                <option value="FEMENINO">FEMENINO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Adscripcion:</label>
                            <select class="form-control" id="adscripcion" name="adscripcion">
                                <option value="1"> COMISARÍA Y AYUDANTÍA </option>
                                <option value="2"> JEFATURA DE ESTADO MAYOR </option>
                                <option value="3"> INSP. GRAL. Y ASUNTOS INTERNOS </option>
                                <option value="4"> SECCIÓN 1 (PERSONAL) </option>
                                <option value="5"> SECCIÓN 2 (INTELIGENCIA) </option>
                                <option value="6"> SECCIÓN 3 (OPERACIONES) </option>
                                <option value="7"> SECCIÓN 4 (ADMINISTRACIÓN) </option>
                                <option value="8"> SECCIÓN 5 (JURÍDICO) </option>
                                <option value="9"> PRIMER AGRUPAMIENTO </option>
                                <option value="10"> SEGUNDO AGRUPAMIENTO</option>
                                <option value="11"> TERCER AGRUPAMIENTO </option>
                                <option value="12"> PRIMER GRUPO </option>
                                <option value="13"> SEGUNDO GRUPO </option>
                                <option value="14"> TERCER GRUPO </option>
                                <option value="15"> CUARTO GRUPO </option>
                                <option value="16"> QUINTO GRUPO </option>
                                <option value="17"> SEXTO GRUPO </option>
                                <option value="21"> DÉCIMO GRUPO </option>
                                <option value="23"> SEGURIDAD DEL SECRETARIO DE SEGURIDAD PUBLICA </option>
                                <option value="24"> GUARDIA EN PREVENCIÓN </option>
                                <option value="25"> GUARDIA DE PALACIO </option>
                                <option value="27"> A DISPOSICIÓN DE S.S.P.E. </option>
                                <option value="28"> BANDA DE GUERRA </option>
                                <option value="30"> BAJAS CONFIRMADA </option>
                                <option value="31"> A DISPOSICIÓN DE S-1 </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Asignacion" class="form-label">Asignacion</label>
                            <select class="form-control" id="Asignacion" name="Asignacion">
                                <option value="1"> ASIGNADO</option>
                                <option value="2"> COMISION </option>
                                <option value="3"> ENCUADRE </option>
                            </select>    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">R.F.C:</label>
                            <input type="text" id="rfc" name="rfc" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">C.U.R.P:</label>
                            <input type="text" id="curp" name="curp" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Fecha de ingreso:</label>
                            <input type="date" id="fecha_ingreso" name="fecha_ingreso" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ESCOLARIDAD:</label>
                            <select class="form-control" id="escolaridad" name="escolaridad">
                                <option value="1">BASICA</option>
                                <option value="2">MEDIA</option>
                                <option value="3">MEDIA SUPERIOR</option>
                                <option value="4">SUPERIOR</option>
                                <option value="5">POSTGRADO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">NIVEL:</label>
                            <select class="form-control" id="nivel" name="nivel">
                                <option value="1">PRESCOLAR</option>
                                <option value="2">PRIMARIA</option>
                                <option value="3">SECUNDARIA</option>
                                <option value="4">PREPARATORIA</option>
                                <option value="5">UNIVERSIDAD</option>
                                <option value="5">UNIVERSIDAD</option>
                                <option value="6">MAESTRIA</option>
                                <option value="7">DOCTORADO</option>
                                <option value="8">INGENIERIA</option>
                                <option value="9">ARQUITECTURA</option>
                                <option value="10">DERECHO</option>
                                <option value="11">CONTADURIA PUBLICA</option>
                                <option value="12">TSU</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ESPECIALIDAD:</label>
                            <select id="especialidad" name="especialidad" class="form-control">
                                <option value="1">SISTEMAS</option>
                                <option value="2">MERCADOTECNIA</option>
                                <option value="3">INGENIERIA INDUSTRIAL</option>
                                <option value="4">MECATRONICA</option>
                                <option value="5">LENGUA INGLESA</option>
                                <option value="6">QUIMICA</option>
                                <option value="7">TELECOMUNICACIONES</option>
                                <option value="8">ARTES</option>
                                <option value="9">DISEÑO GRAFICO</option>
                                <option value="10">FISICO MATEMATICO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ESTATUS ESTUDIOS: (SEMESTRE TRUNCO)</label>
                            <select id="estatus" name="estatus" class="form-control">
                                <option value="1">TERMINADO</option>
                                <option value="2">EN PROGRESO</option>
                                <option value="3">TRUNCA</option>
                                <option value="4">EN LINEA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">HABILIDAD U AFICION:</label>
                            <select class="form-control" id="habilidad" name="habilidad">
                                <option value="2">CARPINTERO</option>
                                <option value="3">CERRAGERO</option>
                                <option value="4">ALBAÑIL</option>
                                <option value="5">FONTANERO / PLOMERO</option>
                                <option value="7">SOLDADOR</option>
                                <option value="8">PINTOR</option>
                                <option value="9">OBRERO</option>
                                <option value="10">TORNERO</option>
                                <option value="11">EXTERMINADOR</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ESTADO CIVIL:</label>
                            <select class="form-control" id="estado_civil" name="estado_civil">
                                <option value="1">SOLTERO(A)</option>
                                <option value="2">CASADO(A)/option>
                                <option value="3">VIUDA(O)</option>
                                <option value="4">UNION LIBRE</option>
                                <option value="5">DIVORCIADO(A)</option>
                                <option value="6">COCUBINATO</option>
                                <option value="7">SEPARACION EN PROCESO JUDICIAL</option>
                            </select>>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">FECHA DE NACIMIENTO:</label>
                            <input type="date" id=fecha_nacimiento name="fecha_nacimiento" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">DEPORTE(S) PRACTICADO(S):</label>
                            <input type="text" id="deportes" name="deportes" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">TIPO DE LICENCIA:</label>
                            <input type="text" id="tipo_licencia" name="tipo_licencia" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">No. FOLIO LICENCIA:</label>
                            <input type="number" id="num_licencia" name="num_licencia" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">VIGENCIA:</label>
                            <input type="date" id="vigencia" name="vigencia" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">NUM TEL PERSONAL:</label>
                            <input type="text" id="tel_personal" name="tel_personal" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">NOMBRE REFERENCIA PERSONAL[1]:</label>
                            <input type="text" id="referencia1_n" name="referencia1_n" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">APELLIDO PATERNO REFERENCIA PERSONAL[1]:</label>
                            <input type="text" id="referencia1_ap" name="referencia1_ap" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">APELLIDO MATERNO REFERENCIA PERSONAL[1]:</label>
                            <input type="text" id="referencia1_am" name="referencia1_am" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">NUM TEL REFERENCIA[1]:</label>
                            <input type="text" id="tel_referencia" name="tel_referencia" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">PARENTESCO[1]:</label>
                            <select class="form-control" id="parentesco1" name="parentesco1">
                                <option value="1">ABUELA(O)</option>
                                <option value="2">AMIGA(O)</option>
                                <option value="3">CONCUBINA(O)</option>
                                <option value="4">CUÑADA(O)</option>
                                <option value="5">ESPOSA(O)</option>
                                <option value="6">HERMANA(O)</option>
                                <option value="7">HERMANASTRA(O)</option>
                                <option value="8">HIJA(O)</option>
                                <option value="9">HIJASTRA(O)</option>
                                <option value="10">MADRE</option>
                                <option value="11">MADRASTRA</option>
                                <option value="12">NIETA(O)</option>
                                <option value="13">PRIMA(O)</option>
                                <option value="14">SOBRINA(O)</option>
                                <option value="15">SUEGRA(O)</option>
                                <option value="16">TIA(O)</option>
                                <option value="17">NOVIA(O)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">NOMBRE REFERENCIA PERSONAL[2]:</label>
                            <input type="text" id="referencia2_n" name="referencia2_n" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">APELLIDO PATERNO REFERENCIA PERSONAL[2]:</label>
                            <input type="text" id="referencia2_ap" name="referencia2_ap" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">APELLIDO MATERNO REFERENCIA PERSONAL[2]:</label>
                            <input type="text" id="referencia2_am" name="referencia2_am" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">NUM TEL REFERENCIA[2]:</label>
                            <input type="text" id="tel_referencia2" name="tel_referencia2" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">PARENTESCO[2]:</label>
                            <select class="form-control" id="parentesco2" name="parentesco2">
                                <option value="1">ABUELA(O)</option>
                                <option value="2">AMIGA(O)</option>
                                <option value="3">CONCUBINA(O)</option>
                                <option value="4">CUÑADA(O)</option>
                                <option value="5">ESPOSA(O)</option>
                                <option value="6">HERMANA(O)</option>
                                <option value="7">HERMANASTRA(O)</option>
                                <option value="8">HIJA(O)</option>
                                <option value="9">HIJASTRA(O)</option>
                                <option value="10">MADRE</option>
                                <option value="11">MADRASTRA</option>
                                <option value="12">NIETA(O)</option>
                                <option value="13">PRIMA(O)</option>
                                <option value="14">SOBRINA(O)</option>
                                <option value="15">SUEGRA(O)</option>
                                <option value="16">TIA(O)</option>
                                <option value="17">NOVIA(O)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ESTADO:</label>
                            <select class="form-control" id="estado" name="estado">
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
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">CIUDAD/MUNICIPIO:</label>
                            <input type="text" id="ciudad" name="ciudad" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">COLONIA:</label>
                            <input type="text" id="colonia" name="colonia" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">CALLE:</label>
                            <input type="text" id="calle" name="calle" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">NUMERO:</label>
                            <input type="text" id="numero" name="numero" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">CODGIO POSTAL:</label>
                            <input type="text" id="codigo_postal" name="codigo_postal" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">IDIOMA/DIALECTO:</label>
                            <input type="text" id="idioma" name="idioma" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">TATUAJES:</label>
                            <select class="form_control" name="tatuajes" id="tatuajes">
                                <option value="NO">NO</option>
                                <option value="SI">SI</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ORIGINARIO:</label>
                            <input type="text" id="originario" name="originario" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">TIPO DE SANRGRE:</label>
                            <input type="text" id="sangre" name="sangre" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">PESO (Kilogramos [ej. 60]):</label>
                            <input type="number" id="peso" name="peso" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">ESTATURA(Metros [ej. 1.80]):</label>
                            <input type="number" id="estatura" name="estatura" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn btn-info">Guardar</div>
                    </div>
                    <div class="col-md-6">
                        <div class="btn btn-danger">Cancelar</div>
                    </div>

                </div>
        </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
