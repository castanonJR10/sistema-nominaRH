<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use App\Models\Empresa;
use App\Models\TipoEmpleado;
use App\Models\Departamentos;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('empresas.index')->with(['Empresas' =>Empresa::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $empresa = new Empresa;
        $empresa->id = $request->id;
        $empresa->nombreEmpresa = $request->nombreEmpresa;
        $empresa->rfc = $request->rfc;
        $empresa->save(); 
        return redirect('/empresas'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('empresas.edit')->with(['Empresa'=>Empresa::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $empresa = Empresa::find($id);
        $empresa->nombreEmpresa = $request->nombreEmpresa;
        $empresa->rfc = $request->rfc;
        $empresa->update();
        return redirect('/empresas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Empresa::find($id)->delete();
        return ["Error"=>0];
    }
}
