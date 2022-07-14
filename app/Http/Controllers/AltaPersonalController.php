<?php

namespace App\Http\Controllers;

use App\Models\AltaPersonal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AltaPersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AltaPersonal.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        DB::table('datos_personales')->insert(
            [
                'num_emp' => $request['num_emp'],
                'nombre' => $request['nombre'],
                'primer_apellido' => $request['apellido_p'],
                'segundo_apellido' => $request['apellido_m'],
                'RFC' => $request['rfc'],
                'CURP' => $request['curp'],
                'fecha_nacimiento' => $request['fecha_nacimiento'],
                'deportes' => $request['deportes'],
                'estado_nacimiento' => $request['estado'],
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        DB::table('cambios_grados')->insert(
            [
                'num_emp' => $request['num_emp'],
                'grado_alta' => $request['grado'],
                'motivo_camb_grado' => 5, //no se solicita este dato en el formulario
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        DB::table('cargos')->insert(
            [
                'num_emp' => $request['num_emp'],
                'cargo'=> $request['cargo'],
                'fecha' => now(),
                'create_time' => now(),
                'update_time' => now()
            ]
        );

        DB::table('cambios_ads')->insert(
            [
                'num_emp' => $request['num_emp'],
                'alta_ads' => $request['adscripcion'],
                'asignacion' => $request['Asignacion'],
                'fecha' => now(),
                'motivo' => 1,
                'created_at' => now(),
                'updated_at' => now()
                //falta oficio, vacaciones, comentarios, anteciedentes ya que no se solicitan en el formulario
                //se envían como datos nulos
            ]
        );

        DB::table('altas')->insert(
            [
                'num_emp' => $request['num_emp'],
                'fecha_ingreso' => $request['fecha_ingreso'],
                'fecha_ingresi_fc' => $request['fecha_ingreso'],
                'tipo_alta' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        DB::table('formaciones_academicas')->insert(
            [
                'num_emp' => $request['num_emp'],
                'escolaridad' => $request['escolaridad'],
                'especialidad' => $request['especialidad'],
                'idioma_dialecto' => $request['idioma'],
                'nivel' => $request['nivel'],
                'estatus' => $request['estatus'],
                'created_at' => now(),
                'updated_at' => now()
                //esta tabla tiene un valor de fecha engreso, desconosco si sigifica ingreso o egreso.
                //el valor no se pide en el formulario
            ]
        );

        DB::table('habilidades')->insert(
            [
                'num_emp' => $request['num_emp'],
                'tipo' => $request['habilidad'],
                'fecha' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        
        DB::table('estados_civiles')->insert(
            [
                'num_emp' => $request['num_emp'],
                'edo_civil' => $request['estado_civil'],
                'adscripcion' => $request['adscripcion'],
                'fecha' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        DB::table('licencias')->insert([
            'num_emp' => $request['num_emp'],
            'motivo' => 1,
            'folio' => $request['num_licencia'],
            'ubicacion' => $request['estado'],
            'fecha_inicio' => now(),
            'fecha_fin' => $request['vigencia'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('telefonos')->insert([
            'num_emp' => $request['num_emp'],
            'telefono' => $request['tel_personal'],
            'tipo_contacto' => 'PERSONAL',
            'adscripcion' => $request['adscripcion'],
            'fecha' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('referencias_personales')->insert([
            'num_emp' => $request['num_emp'],
            'nombre' => $request['referencia1_n'],
            'primer_apellido' => $request['referencia1_ap'],
            'segundo_apellido' => $request['referencia1_am'],
            'numero_telefono' => $request['tel_referencia'],
            'parentesco' => $request['parentesco1'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('referencias_personales')->insert([
            'num_emp' => $request['num_emp'],
            'nombre' => $request['referencia2_n'],
            'primer_apellido' => $request['referencia2_ap'],
            'segundo_apellido' => $request['referencia2_am'],
            'numero_telefono' => $request['tel_referencia2'],
            'parentesco' => $request['parentesco2'],
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('domicilios_personales')->insert([
            'num_emp' => $request['num_emp'],
            'calle' => $request['calle'],
            'numero' => $request['numero'],
            'colonia' => $request['colonia'],
            'ciudad' => $request['ciudad'],
            'estado' => $request['estado'],
            'codigo_postal' => $request['codigo_postal'],
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('datos_medicos')->insert([
            'num_emp' => $request['num_emp'],
            'tatuajes' => $request['tatuajes'],
            'tipo_sangre' => $request['sangre'],
            'peso' => $request['peso'],
            'estatura' => $request['estatura']
        ]);


        //EL DATO "ORIGINARIO" NO SE DONDE SE COLOCARÁ

        //TODOS ESTOS DATOS FUERON CORREGIDOS GRACIAS A COLOCAR LA INFORMACION FALTANTE EN TIPO NULLEABLE
        //EN CASO DE ERROR REVISAR LA BASE DE DATOS LOS DATOS DE ID (QUE SEA AUTO INCREMENTABLE)
        //Y LOS DATOS DE LA TABLA QUE NO APARECEN DENTRO DEL INSERT CHECAR QUE SEAN NULLEABLES

        return redirect()->route('CambioAds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AltaPersonal  $altaPersonal
     * @return \Illuminate\Http\Response
     */
    public function show(AltaPersonal $altaPersonal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AltaPersonal  $altaPersonal
     * @return \Illuminate\Http\Response
     */
    public function edit(AltaPersonal $altaPersonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AltaPersonal  $altaPersonal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AltaPersonal $altaPersonal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AltaPersonal  $altaPersonal
     * @return \Illuminate\Http\Response
     */
    public function destroy(AltaPersonal $altaPersonal)
    {
        //
    }
}
