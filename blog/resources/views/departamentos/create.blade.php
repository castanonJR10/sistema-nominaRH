@extends('layouts.master')
@section('contenido')
<div class="container">
    <form class="form-horizontal" action="/departamentos/create" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombreDepartamento" class="control-label">Nombre Departamento</label>
            <input type="text" name="nombreDepartamento" class="form-control" placeholder="teclee nombre departamento">
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
            <a class="btn btn-secondary" href="{{ route('departamentos.index') }}"> Regresar</a>
            <button type="submit" class="btn btn-success" name="Grabar">Grabar</button>
        </div>    
    </form>    
</div>
@endsection