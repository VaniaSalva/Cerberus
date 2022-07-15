<?php

namespace App\Http\Controllers;

use App\Models\Incapacidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncapacidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = DB::table('datos_personales')
        ->leftJoin('cambios_ads', 'datos_personales.num_emp', '=', 'cambios_ads.num_emp')
        ->leftJoin('cat1adscripciones', 'cambios_ads.alta_ads', '=', 'cat1adscripciones.id')
        ->select('cambios_ads.alta_ads','datos_personales.nombre', 'datos_personales.num_emp','datos_personales.primer_apellido','datos_personales.segundo_apellido','cat1adscripciones.adscripcion')
        ->get();
        return view('Incapacidad.index', ['empleados' => $empleados]);
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
        DB::table('incapacidades')->insert([
            'num_emp' => $request['nEmpleado'],
            'consecutivo' => $request['Consecutivo'],
            'fecha_inicio' => $request['Inicio'],
            'fecha_final' => $request['Fin'],
            'folio_incapacidad' => $request['Folio'],
            'diagnostico' => $request['Diagnostico'],
            'dias' => $request['Dias'],
            'adscripcion' => $request['ads'],
            'tipo_incapacidad' => $request['Tipo'],
            'cedula_Dr' => $request['Cedula'],
            'nombre_medico' => $request['Medico']

        ]);
        return redirect()->route('Incapacidad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incapacidad  $incapacidad
     * @return \Illuminate\Http\Response
     */
    public function show(Incapacidad $incapacidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Incapacidad  $incapacidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Incapacidad $incapacidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incapacidad  $incapacidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incapacidad $incapacidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incapacidad  $incapacidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incapacidad $incapacidad)
    {
        //
    }
}
