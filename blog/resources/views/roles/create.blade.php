@extends('layouts.master')
@section('contenido')
<div class="container">
    <form class="form-horizontal" action="/roles/create" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombreRol" class="control-label">Nombre Rol</label>
            <input type="text" name="nombreRol" class="form-control" placeholder="teclee nombre Rol">
        </div>    
        <div class="form-group">
            <label for="empresaId" class="control-label">Empresa</label>
            <select name="empresa_id" class="form-control">
            <option value="">Selecciona un Empresa</option>
            @foreach($Empresas as $empresa)
            <option value="{{ $empresa->id }}">{{$empresa->nombreEmpresa}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group col-md-12">
            <a class="btn btn-secondary" href="{{ route('roles.index') }}"> Regresar</a>
            <button type="submit" class="btn btn-success" name="Grabar">Grabar</button>
        </div>    
    </form>    
</div>
@endsection