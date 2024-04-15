@extends('layouts.master')
@section('contenido')
<div class="container">
    <form class="form-horizontal" action="/permisos/create" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombrePermiso" class="control-label">Nombre Permiso</label>
            <input type="text" name="nombrePermiso" class="form-control" placeholder="teclee nombre Permiso">
        </div>    
        <div class="form-group col-md-12">
            <a class="btn btn-secondary" href="{{ route('permisos.index') }}"> Regresar</a>
            <button type="submit" class="btn btn-success" name="Grabar">Grabar</button>
        </div>    
    </form>    
</div>
@endsection