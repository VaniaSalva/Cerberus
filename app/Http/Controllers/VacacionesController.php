<?php

namespace App\Http\Controllers;

use App\Models\Vacaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VacacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = DB::table('datos_personales')->select('nombre','primer_apellido','segundo_apellido','num_emp')->get();

        return view('Vacaciones.index', ['empleados' => $empleados]);
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
        DB::table('vacaciones')->insert([
            'num_emp' => $request['nEmpleado'],
            'periodo' => $request['Periodo'],
            'ubicacion' => $request['Ubicacion'],
            'fecha_inicio' => $request['Inicio'],
            'fecha_final' => $request['Fin'],
            'folio' => $request['Folio'],
            'usuario' => 1
        ]);
        return redirect()->route('Vacaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacaciones  $vacaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Vacaciones $vacaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacaciones  $vacaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacaciones $vacaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacaciones  $vacaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacaciones $vacaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacaciones  $vacaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacaciones $vacaciones)
    {
        //
    }
}
