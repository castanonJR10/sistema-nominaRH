@extends('layouts.master')
@section('contenido')
<div class="container">
    <form class="form-horizontal" action="/roles/edit/{{$Roles->id}}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="nombreRol" class="control-label">Nombre Rol</label>
            <input type="text" name="nombreRol" value="{{$Roles->nombreRol}}" class="form-control" placeholder="teclee nombre rol">
        </div>  
        <div class="form-group">
            <label for="nombreEmpresa" class="control-label">Empresa</label>
            <select name="empresa_id" class="form-control">
            <option value="">Selecciona un Empresa</option>
            @foreach($Empresas as $empresa)
            <option value="{{ $empresa->id }}" {{$empresa->id == $Roles->empresa_id?'SELECTED':''}}>{{$empresa->nombreEmpresa}}</option>
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