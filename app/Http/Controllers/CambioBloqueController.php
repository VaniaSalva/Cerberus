<?php

namespace App\Http\Controllers;

use App\Models\CambioBloque;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CambioBloqueController extends Controller
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
            ->join('tipos_bloques', 'cambios_bloques.bloque_alta', '=', 'tipos_bloques.id')
            ->leftJoin('cambios_ads', function ($query){
                $query->on('cambios_ads.num_emp', '=', 'datos_personales.num_emp')
                ->whereRaw('cambios_ads.id = (select max(`id`) from cambios_ads where cambios_ads.num_emp = datos_personales.num_emp)');
            })
            ->join('cat1adscripciones', 'cambios_ads.alta_ads', '=', 'cat1adscripciones.id')
            ->select('cambios_bloques.bloque_alta','cambios_ads.alta_ads','datos_personales.nombre', 'datos_personales.num_emp','datos_personales.primer_apellido','datos_personales.segundo_apellido','tipos_bloques.bloque', 'cat1adscripciones.adscripcion')
            ->get();
        return view('CambioBloque.index', ['empleados' => $empleados]);
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
        DB::table('cambios_bloques')->insert([
            'num_emp' => $request['nEmpleado'], 
            'bloque_alta' => $request['BloqueN'], 
            'bloque_baja'=>$request['BloqueB'], 
            'motivo'=>$request['Motivo'], 
            'oficio'=>$request['Oficio'] ,
            'created_at'=>now()
        ]);

        return redirect()->route('CambioBloque.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CambioBloque  $cambioBloque
     * @return \Illuminate\Http\Response
     */
    public function show(CambioBloque $cambioBloque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CambioBloque  $cambioBloque
     * @return \Illuminate\Http\Response
     */
    public function edit(CambioBloque $cambioBloque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CambioBloque  $cambioBloque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CambioBloque $cambioBloque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CambioBloque  $cambioBloque
     * @return \Illuminate\Http\Response
     */
    public function destroy(CambioBloque $cambioBloque)
    {
        //
    }
}
