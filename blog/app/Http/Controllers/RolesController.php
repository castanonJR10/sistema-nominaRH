<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\Empresa;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('roles.index')->with(['Roles'=>Roles::all()]);
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
        return view('roles.create')->with([
            'Empresas'=>Empresa::whereIn('id', [$idEmpresa])->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRolesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $roles = new Roles;
        $roles->nombreRol = $request->nombreRol;
        $roles->empresa_id = $request->empresa_id;
        $roles->save();
        return redirect('/roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(Roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $idEmpresa=1;
        return view('roles.edit')->with([
            'Roles' => Roles::find($id),
            'Empresas' => Empresa::whereIn('id', [$idEmpresa])->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRolesRequest  $request
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $roles = Roles::find($id);
        $roles->nombreRol = $request->nombreRol;
        $roles->empresa_id = $request->empresa_id;
        $roles->update();
        return redirect('roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Roles::find($id)->delete();
        return ["Error"=>0];
    }
}
