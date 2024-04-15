@extends('layouts.master')
@section('contenido')
    <div class="row">
        <a href="{{route('empleados.create')}}" class="btn  btn-sm btn-primary">Agregar Empleado</a>
    </div>
    <table class="table table-sm table-bordered table-stripped">
        <thead class="table-primary">
            <tr>
                <th></th>
            <th>Empresa</th>
            <th>ID</th>
            <th>Name</th>
            <th>Departamento</th>
            <th>Tipo de Empleado</th>
            <th>Fecha Nac</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Empleados as $empleado)
            <tr id="row_{{$empleado->id}}">
             <td><a href="{{route('empleados.edit',$empleado->id)}}"><i class="fa fa-edit fa-2x text-blue"></i></a> 
                <a href="#"><i  id="{{$empleado->id}}" class="fa fa-trash-alt fa-2x text-red delete"></i></a></td>   
             <td>{{ $empleado->Empresa->nombreEmpresa}}</td>
             <td>{{ $empleado->id}}</td>
             <td>{{ $empleado->nombreEmpleado}}</td>
             <td>{{ $empleado->Departamento->nombreDepartamento}}</td>
             <td>{{ $empleado->TipoEmpleado->descripcion}}</td>
             <td>{{ $empleado->fechaNac}}</td>
            </tr>
            @endforeach
        </tbody>
        {{-- <tfoot>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Name</th>
                <th>Fecha Nac</th>
                </tr>            
        </tfoot> --}}
    </table>
    <script>
        $(".delete").on('click', function(){
            let ID = $(this).attr('id')
            if (confirm('Are you sure you want to delete this')){
            $.post('/empleados/delete/'+ID,
                     {"_method":"delete","_token":"{{@csrf_token()}}"},
            function(response){
                if (response.Error===0){
                    alert('Borrado')
                    $("#row_"+ID).remove()
                }
            })
            }
        
        })
    </script>
@endsection