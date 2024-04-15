@extends('layouts.master')
@section('contenido')
<div class="container">
    <form class="form-horizontal" action="/usuarios/create" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre" class="control-label">Nombre usuario</label>
            <input type="text" name="nombre" class="form-control" placeholder="teclee nombre usuario">
        </div>    
        <div class="form-group">
            <label for="apellidoPaterno" class="control-label">Apellido Paterno</label>
            <input type="text" name="apellidoPaterno" class="form-control" placeholder="teclee apellido paterno">
        </div> 
        <div class="form-group">
            <label for="apellidoMaterno" class="control-label">Apellido Materno</label>
            <input type="text" name="apellidoMaterno" class="form-control" placeholder="teclee apellido materno">
        </div> 
        <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="teclee email">
        </div>
        <div class="form-group">
            <label for="password" class="control-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="teclee password">
        </div>   
        <div class="form-group">
            <label for="role_id" class="control-label">Rol</label>
            <select name="role_id" class="form-control">
            <option value="">Selecciona un Rol</option>
            @foreach($Roles as $role)
            <option value="{{ $role->id }}">{{$role->nombreRol}}</option>
            @endforeach
            </select>
        </div>     
        <div class="form-group">
            <label for="empresa_id" class="control-label">Empresa</label>
            <select name="empresa_id" class="form-control">
            <option value="">Selecciona un Empresa</option>
            @foreach($Empresa as $empresa)
            <option value="{{ $empresa->id }}">{{$empresa->nombreEmpresa}}</option>
            @endforeach
            </select>
        </div>         
        <div class="form-group col-md-12">
            <a class="btn btn-secondary" href="{{ route('usuarios.index') }}"> Regresar</a>
            <button type="submit" class="btn btn-success" name="Grabar">Grabar</button>
        </div>    
    </form>    
</div>
@endsection