@extends('layouts.master')
@section('contenido')
<div class="container">
    <form class="form-horizontal" action="/empleados/create" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombreEmpleado" class="control-label">Nombre empleado</label>
            <input type="text" name="nombreEmpleado" class="form-control" placeholder="teclee nombre empleado">
        </div>    
        <div class="form-group">
            <label for="numeroEmpleado" class="control-label"># Empleado</label>
            <input type="text" name="numeroEmpleado" class="form-control" placeholder="teclee nombre empleado">
        </div>    
        <div class="form-group">
            <label for="nombreEmpleado" class="control-label">Empresa</label>
            <select name="empresa_id" class="form-control">
            <option value="">Selecciona un Empresa</option>
            @foreach($Empresas as $empresa)
            <option value="{{ $empresa->id }}">{{$empresa->nombreEmpresa}}</option>
            @endforeach
            </select>
        </div>    
        <div class="form-group">
            <label for="tipoEmpleado" class="control-label">Tipo empleado</label>
            <select name="tipoEmpleado_id" class="form-control">
            <option value="">Selecciona un Tipo de Empleado</option>
            @foreach($TiposEmpleado as $timpoempleado)
            <option value="{{ $timpoempleado->id }}">{{$timpoempleado->descripcion}}</option>
            @endforeach
            </select>
        </div>    
        <div class="form-group">
            <label for="departamento_id" class="control-label">Departamento</label>
            <select name="departamento_id" class="form-control">
            <option value="">Selecciona un Departamento</option>
            @foreach($Departamentos as $depto)
            <option value="{{ $depto->id }}">{{$depto->nombreDepartamento}}</option>
            @endforeach
            </select>
        </div>    
        <div class="form-group">
            <label for="curp" class="control-label">CURP</label>
            <input type="text" name="curp" maxlength="22" class="form-control" placeholder="teclee curp">
        </div>    
        <div class="form-group">
            <label for="fechaNac" class="control-label">fecha de nacimiento</label>
            <input type="date" name="fechaNac" class="form-control" placeholder="fecha nacimiento">
        </div>    
        <div class="form-group">
            <label for="numSS" class="control-label">NSS</label>
            <input type="text" name="numSS" maxlength="30" class="form-control" placeholder="teclee num S.S.">
        </div>    
        <div class="form-group">
            <label for="cuentaBancaria" class="control-label">cuenta bancaria</label>
            <input type="text" name="cuentaBancaria" maxlength="20" class="form-control" placeholder="teclee nombre empleado">
        </div>    
        <div class="form-group col-md-12">
            <a class="btn btn-secondary" href="{{ route('empleados.index') }}"> Regresar</a>
            <button type="submit" class="btn btn-success" name="Grabar">Grabar</button>
        </div>    
    </form>    
</div>
@endsection