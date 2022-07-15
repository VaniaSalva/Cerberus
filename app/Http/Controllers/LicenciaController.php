<?php

namespace App\Http\Controllers;

use App\Models\Licencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LicenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = DB::table('datos_personales')
        ->leftJoin('cambios_bloques', 'datos_personales.num_emp', '=', 'cambios_bloques.num_emp')
        ->leftJoin('tipos_motivos_cambio_ads', 'cambios_bloques.motivo', '=', 'tipos_motivos_cambio_ads.id')
        ->select('cambios_bloques.oficio','cambios_bloques.motivo','tipos_motivos_cambio_ads.motivo_cambAds','datos_personales.nombre', 'datos_personales.num_emp','datos_personales.primer_apellido','datos_personales.segundo_apellido')
        ->get();
        return view('Licencia.index', ['empleados' => $empleados]);
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
        DB::table('licencias')->insert([
            'num_emp' => $request['nEmpleado'],
            'motivo' => $request['mot'],
            'folio' => 1,
            'ubicacion' => $request['Ubicacion'],
            'fecha_inicio' => $request['Inicio'],
            'fecha_fin' => $request['Fin'],
            'presentandose' => $request['Presentandose']
        ]);
        return redirect()->route('Licencia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function show(Licencia $licencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Licencia $licencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Licencia $licencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licencia $licencia)
    {
        //
    }
}
