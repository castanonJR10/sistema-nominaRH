<?php

namespace App\Http\Controllers;

use App\Models\TipoEmpleado;
use App\Http\Requests\StoreTipoEmpleadoRequest;
use App\Http\Requests\UpdateTipoEmpleadoRequest;

class TipoEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTipoEmpleadoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoEmpleadoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoEmpleado  $tipoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function show(TipoEmpleado $tipoEmpleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoEmpleado  $tipoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoEmpleado $tipoEmpleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoEmpleadoRequest  $request
     * @param  \App\Models\TipoEmpleado  $tipoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoEmpleadoRequest $request, TipoEmpleado $tipoEmpleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoEmpleado  $tipoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoEmpleado $tipoEmpleado)
    {
        //
    }
}
