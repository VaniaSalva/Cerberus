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
                'RFC' => $request['rfc'],
                'CURP' => $request['curp'],
                'fecha_nacimiento' => $request['fecha_nacimiento'],
                'deportes' => $request['deportes'],
                'estado_nacimiento' => $request['estado']
            ]
        );

        DB::table('cambios_grados')->insert(
            [
                'num_emp' => $request['num_emp'],
                'grado_alta' => $request['grado']
            ]
        );

        DB::table('cargos')->insert(
            [
                'num_emp' => $request['num_emp'],
                'cargo'=> $request['cargo'],
                'fecha' => now(),
                'create_time' => now()
            ]
        );

        DB::table('cambios_ads')->insert(
            [
                'num_emp' => $request['num_emp'],
                'alta_ads' => $request['adscripcion'],
                'asignacion' => $request['asignacion'],
                'fecha' => now(),
                
            ]
        );

        DB::table('altas')->insert(
            [
                'num_emp' => $request['num_emp'],
                'fecha_ingreso' => $request['fecha_ingreso'],
                'fecha_ingresi_fc' => $request['fecha_ingreso']
            ]
        );

        DB::table('formaciones_academicas')->insert(
            [
                'num_emp' => $request['num_emp'],
                'escolaridad' => $request['escolaridad'],
                'especialidad' => $request['especialidad'],
                'idioma_dialecto' => $request['idioma']
            ]
        );

        DB::table('habilidades')->insert(
            [
                'num_emp' => $request['num_emp'],
                'tipo' => $request['habilidad']
            ]
        );
        
        DB::table('estados_civiles')->insert(
            [
                'num_emp' => $request['num_emp'],
                'edo_civil' => $request['estado_civil'],
                'adscripcion' => $request['adscripcion'],
                'fecha' => now()
            ]
        );

        DB::table('licencias')->insert([
            'num_emp' => $request['num_emp'],
            'motivo' => 1,
            'folio' => 1,
            'ubicacion' => $request['estado'],
            'fecha_inicio' => $request['Inicio'],
            'fecha_fin' => $request['Fin'],
            'presentandose' => $request['Presentandose']
        ]);

        DB::table('telefonos')->insert([
            'num_emp' => $request['num_emp'],
            'telefono' => $request['tel_personal'],
            'tipo_contacto' => 'PERSONAL',
            'adscripcion' => $request['adscripcion']
        ]);

        DB::table('referencias_personales')->insert([
            'num_emp' => $request['num_emp'],
            'nombre' => $request['referencia1'],
            'numero_telefono' => $request['tel_referencia'],
            'parentesco' => $request['parentesco1']
        ]);

        DB::table('referencias_personales')->insert([
            'num_emp' => $request['num_emp'],
            'nombre' => $request['referencia2'],
            'numero_telefono' => $request['tel_referencia2'],
            'parentesco' => $request['parentesco2']
        ]);

        DB::table('domicilios_personales')->insert([
            'num_emp' => $request['num_emp'],
            'nombre' => $request['referencia1'],
            'calle' => $request['calle'],
            'numero' => $request['numero'],
            'colonia' => $request['colonia'],
            'ciudad' => $request['ciudad'],
            'estado' => $request['estado'],
            'codigo_postal' => $request['codigo_postal'],

        ]);

        DB::table('datos_medicos')->insert([
            'num_emp' => $request['num_emp'],
            'tatuajes' => $request['tatuajes'],
            'tipo_sangre' => $request['sangre'],
            'peso' => $request['peso'],
            'estatura' => $request['estatura']
        ]);



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
