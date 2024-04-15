<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use Illuminate\Http\Request;

class PermisoSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('permisos.index')->with(['Permisos'=>Permiso::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permisos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permiso = new Permiso;
        $permiso->nombrePermiso = $request->nombrePermiso;
        $permiso->save();
        return redirect('/permisos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function show(Permiso $permiso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('permisos.edit')->with([
            'Permisos' => Permiso::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $permiso = Permiso::find($id);
        $permiso->nombrePermiso = $request->nombrePermiso;
        $permiso->update();
        return redirect('permisos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permiso::find($id)->delete();
        return ["Error"=>0];
    }
}
