<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Roles;
use App\Models\Empresa;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('usuarios.index')->with(['Usuarios'=>Usuarios::with(['Roles', 'Empresa'])->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create')->with(['Roles'=>Roles::all(),'Empresa'=>Empresa::all()]);
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
        $usuario = new Usuarios;
        $usuario->nombre = $request->nombre;
        $usuario->apellidoPaterno = $request->apellidoPaterno;
        $usuario->apellidoMaterno = $request->apellidoMaterno;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->role_id = $request->role_id;
        $usuario->empresa_id = $request->empresa_id;
        $usuario->save();
        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('usuarios.edit')->with(['Usuario' => Usuarios::find($id),
                                            'Roles' =>Roles::all(),
                                            'Empresa'=>Empresa::all()]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $usuario = Usuarios::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->apelllidoPaterno = $request->apelllidoPaterno;
        $usuario->apellidoMaterno = $request->apellidoMaterno;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->role_id = $request->role_id;
        $usuario->empresa_id = $request->empresa_id;
        $usuario->update();
        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Usuarios::find($id)->delete();
        return ["Error"=>0];
    }
}
