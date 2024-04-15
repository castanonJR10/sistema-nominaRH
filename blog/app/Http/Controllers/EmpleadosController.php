<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use App\Models\Empresa;
use App\Models\TipoEmpleado;
use App\Models\Departamentos;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('empleados.index')->with(['Empleados' =>Empleados::with(['Empresa', 'Departamento', 'TipoEmpleado'])->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $idEmpresa=1;
        return view('empleados.create')->with([
                        'Empresas'=>Empresa::whereIn('id',[$idEmpresa])->get(),
                        'TiposEmpleado'=>TipoEmpleado::all(),
                        'Departamentos'=>Departamentos::where('empresa_id',[$idEmpresa])->get()]);
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
        $empleado = new Empleados;
        $empleado->nombreEmpleado = $request->nombreEmpleado;
        $empleado->empresa_id = $request->empresa_id;
        $empleado->tipoEmpleado_id = $request->tipoEmpleado_id;
        $empleado->departamento_id = $request->departamento_id;
        $empleado->curp = $request->curp;
        $empleado->fechaNac = $request->fechaNac;
        $empleado->numSS = $request->numSS;
        $empleado->cuentaBancaria = $request->cuentaBancaria;        
        $empleado->numeroEmpleado = $request->numeroEmpleado;
        $empleado->save(); 
        return redirect('/empleados');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //dd(Empleados::find($id));
        $idEmpresa=1;
        return view('empleados.edit')->with(['Empleado'=>Empleados::find($id),
                                             'Empresas'=>Empresa::whereIn('id',[$idEmpresa])->get(),
                                             'TiposEmpleado'=>TipoEmpleado::all(),
                                             'Departamentos'=>Departamentos::where('empresa_id',[$idEmpresa])->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $empleado = Empleados::find($id);
        $empleado->nombreEmpleado = $request->nombreEmpleado;
        $empleado->empresa_id = $request->empresa_id;
        $empleado->tipoEmpleado_id = $request->tipoEmpleado_id;
        $empleado->departamento_id = $request->departamento_id;
        $empleado->curp = $request->curp;
        $empleado->fechaNac = $request->fechaNac;
        $empleado->numSS = $request->numSS;
        $empleado->cuentaBancaria = $request->cuentaBancaria;        
        $empleado->numeroEmpleado = $request->numeroEmpleado;
        $empleado->update(); 
        return redirect('/empleados'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        Empleados::find($id)->delete();
        return ["Error"=>0];

    }
}
