@extends('layouts.master')
@section('contenido')
<div class="container">
    <form class="form-horizontal" action="/empresas/create" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombreEmpresa" class="control-label">Nombre Empresa</label>
            <input type="text" name="nombreEmpresa" class="form-control" placeholder="teclee nombre empresa">
        </div>    
        <div class="form-group">
            <label for="rfc" class="control-label">RFC</label>
            <input type="text" name="rfc" class="form-control" placeholder="teclee rfc">
        </div>    
     
        <div class="form-group col-md-12">
            <a class="btn btn-secondary" href="{{ route('empresas.index') }}"> Regresar</a>
            <button type="submit" class="btn btn-success" name="Grabar">Grabar</button>
        </div>    
    </form>    
</div>
@endsection