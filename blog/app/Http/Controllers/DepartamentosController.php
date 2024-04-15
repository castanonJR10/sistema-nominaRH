<?php

namespace App\Http\Controllers;

use App\Models\Departamentos;
use App\Models\Empresa;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('departamentos.index')->with(['Departamentos'=>Departamentos::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idEmpresa=1;
        return view('departamentos.create')->with([
            'Empresas'=>Empresa::whereIn('id', [$idEmpresa])->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departamento = new Departamentos;
        $departamento->empresa_id = $request->empresa_id;
        $departamento->nombreDepartamento = $request->nombreDepartamento;
        $departamento->save();
        return redirect('/departamentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Departamentos $departamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idEmpresa=1;
        return view('departamentos.edit')->with([
            'Departamentos' => Departamentos::find($id),
            'Empresas' => Empresa::whereIn('id', [$idEmpresa])->get()
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $departamento = Departamentos::find($id);
        $departamento->empresa_id = $request->empresa_id;
        $departamento->nombreDepartamento = $request->nombreDepartamento;
        $departamento->update();
        return redirect('/departamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Departamentos::find($id)->delete();
        return ["Error"=>0];
    }
}
