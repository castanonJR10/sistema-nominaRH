@extends('layouts.master')
@section('contenido')
    <div class="row">
        <a href="{{route('departamentos.create')}}" class="btn  btn-sm btn-primary">Agregar Departamento</a>
    </div>
    <table class="table table-sm table-bordered table-stripped">
        <thead class="table-primary">
            <tr>
                <th></th>
            <th>ID</th>
            <th>Empresa</th>
            <th>Nombre Departamento</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Departamentos as $departamento)
            <tr id="row_{{$departamento->id}}">
             <td><a href="{{route('departamentos.edit',$departamento->id)}}"><i class="fa fa-edit fa-2x text-blue"></i></a><i style="cursor: pointer" id="{{$departamento->id}}" class="fa fa-trash-alt fa-2x text-red delete"></i></td>   
             <td>{{ $departamento->id}}</td>
             <td>{{ $departamento->empresa_id}}</td>
             <td>{{ $departamento->nombreDepartamento}}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Empresa</th>
                <th>Nombre Departamento</th>
            </tr>            
        </tfoot>
    </table>
    <script>
        $(".delete").on('click', function(){
            let ID = $(this).attr('id')
            if (confirm('Are you sure you want to delete this')){
            $.post('/departamentos/delete/'+ID,
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