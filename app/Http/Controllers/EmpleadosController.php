<?php

namespace App\Http\Controllers;

use App\Models\empleados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $empleados = $this->getAll();
        return view('empleados.index', ['empleados' => $empleados]);
    }






    
    public function getAll(){
        $empleados = DB::table('datos_personales')
             //->join('cambios_organicas', 'datos_personales.num_emp', '=', 'cambios_organicas.num_emp')
             ->leftJoin('cambios_organicas', function ($query){
                $query->on('cambios_organicas.num_emp', '=', 'datos_personales.num_emp')
                ->whereRaw('cambios_organicas.id = (select max(`id`) from cambios_organicas where cambios_organicas.num_emp = datos_personales.num_emp)');
            })
             ->leftJoin('altas', 'datos_personales.num_emp', '=', 'altas.num_emp')
             ->leftJoin('funciones', 'datos_personales.num_emp', '=', 'funciones.num_emp')
             ->leftJoin('cambios_ads', function ($query){
                $query->on('cambios_ads.num_emp', '=', 'datos_personales.num_emp')
                ->whereRaw('cambios_ads.id = (select max(`id`) from cambios_ads where cambios_ads.num_emp = datos_personales.num_emp)');
            })
             ->leftJoin('cargos', 'datos_personales.num_emp', '=', 'cargos.num_emp')
             ->leftJoin('ingresos_nominales', 'datos_personales.num_emp', '=', 'ingresos_nominales.num_emp')
             //->join('cambios_bloques', 'datos_personales.num_emp', '=', 'cambios_bloques.num_emp')
             ->leftJoin('cambios_bloques', function ($query){
                $query->on('cambios_bloques.num_emp', '=', 'datos_personales.num_emp')
                ->whereRaw('cambios_bloques.id = (select max(`id`) from cambios_bloques where cambios_bloques.num_emp = datos_personales.num_emp)');
            })
             ->leftJoin('domicilios_personales', 'datos_personales.num_emp', '=', 'domicilios_personales.num_emp')
             ->leftJoin('cat1adscripciones', 'cambios_ads.baja_ads', '=', 'cat1adscripciones.id')
             ->leftJoin('cat1adscripciones as altaAds', 'cambios_ads.alta_ads', '=', 'altaAds.id')
             ->leftJoin('tipos_estados_republica', 'domicilios_personales.estado', '=', 'tipos_estados_republica.id')
             ->leftJoin('tipos_cargos', 'cargos.cargo', '=', 'tipos_cargos.id')
             ->leftJoin('tipos_ingresos', 'ingresos_nominales.tipo_ingreso', '=', 'tipos_ingresos.id')
             ->leftJoin('tipos_funciones', 'funciones.funcion', '=', 'tipos_funciones.id')
             ->leftJoin('tipos_bloques', 'cambios_bloques.bloque_alta', '=', 'tipos_bloques.id')
             ->leftJoin('grados', 'cambios_organicas.grado', '=', 'grados.id')
             ->select('datos_personales.*','cambios_ads.fecha', 'altaAds.adscripcion as alta','tipos_cargos.cargo', 'grados.grado', 'cambios_organicas.num_org', 'tipos_bloques.bloque', 'tipos_funciones.funcion', 'tipos_ingresos.tipo_ingresos','cat1adscripciones.adscripcion','tipos_estados_republica.estado', 'altas.fecha_ingreso', 'altas.fecha_ingresi_fc')
            // ->select('datos_personales.*','cambios_organicas.*', 'altas.*','funciones.*','cambios_ads.*')
             ->get();
             return $empleados;
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit(empleados $empleados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empleados $empleados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy(empleados $empleados)
    {
        //
    }
}
