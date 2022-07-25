<?php

namespace App\Http\Controllers;

use App\Models\Faltas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FaltasController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Crud.Faltas');
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
        DB::table('faltas')->insert([
            'num_emp' => $request['nEmpleado'],
            'fecha' => $request['Fecha']

        ]);
        Session::flash('mensaje', 'Se añadió el registro.');
        return redirect()->route('Faltas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faltas  $faltas
     * @return \Illuminate\Http\Response
     */
    public function show(Faltas $faltas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faltas  $faltas
     * @return \Illuminate\Http\Response
     */
    public function edit(Faltas $faltas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faltas  $faltas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faltas $faltas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faltas  $faltas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faltas $faltas)
    {
        //
    }
}
