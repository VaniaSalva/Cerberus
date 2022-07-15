<?php

namespace App\Http\Controllers;

use App\Models\CambioAds;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CambioAdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = DB::table('datos_personales')
            ->leftJoin('cambios_bloques', function ($query){
                $query->on('cambios_bloques.num_emp', '=', 'datos_personales.num_emp')
                ->whereRaw('cambios_bloques.id = (select max(`id`) from cambios_bloques where cambios_bloques.num_emp = datos_personales.num_emp)');
            })
            ->leftJoin('tipos_bloques', 'cambios_bloques.bloque_alta', '=', 'tipos_bloques.id')
            ->leftJoin('cambios_ads', function ($query){
                $query->on('cambios_ads.num_emp', '=', 'datos_personales.num_emp')
                ->whereRaw('cambios_ads.id = (select max(`id`) from cambios_ads where cambios_ads.num_emp = datos_personales.num_emp)');
            })
            ->leftJoin('cat1adscripciones', 'cambios_ads.alta_ads', '=', 'cat1adscripciones.id')
            ->leftJoin('tipos_asignaciones', 'cambios_ads.asignacion', '=', 'tipos_asignaciones.id')
            ->select('tipos_asignaciones.asignacion','cambios_bloques.bloque_alta','cambios_ads.alta_ads','datos_personales.nombre', 'datos_personales.num_emp','datos_personales.primer_apellido','datos_personales.segundo_apellido','tipos_bloques.bloque', 'cat1adscripciones.adscripcion')
            ->get();
        return view('CambioAds.index', ['empleados' => $empleados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('cambios_ads')->insert([
            'num_emp' => $request['nEmpleado'], 
            'alta_ads' => $request['AdscripcionN'], 
            'baja_ads'=>$request['baja_ads'], 
            'motivo'=>$request['Motivo'], 
            'oficio'=>$request['Oficio'], 
            'fecha'=>$request['Fecha'],
            'bloque'=>$request['BloqueB'],
            'asignacion'=>$request['AsignacionN'],
            'created_at'=>now()
        ]);

        return redirect()->route('CambioAds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CambioAds  $cambioAds
     * @return \Illuminate\Http\Response
     */
    public function show(CambioAds $cambioAds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CambioAds  $cambioAds
     * @return \Illuminate\Http\Response
     */
    public function edit(CambioAds $cambioAds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CambioAds  $cambioAds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CambioAds  $cambioAds
     * @return \Illuminate\Http\Response
     */
    public function destroy(CambioAds $cambioAds)
    {
        //
    }
}
