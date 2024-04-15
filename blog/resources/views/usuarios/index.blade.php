@extends('layouts.master')
@section('contenido')
    <div class="row">
        <a href="{{route('usuarios.create')}}" class="btn  btn-sm btn-primary">Agregar Usuario</a>
    </div>
    <table class="table table-sm table-bordered table-stripped">
        <thead class="table-primary">
            <tr>
                <th></th>
                <th>ID</th>
                <th>Name</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Empresa</th>        
            </tr>
        </thead>
        <tbody>
            @foreach($Usuarios as $usuario)
            <tr id="row_{{$usuario->id}}">
                <td><a href="{{route('usuarios.edit',$usuario->id)}}"><i class="fa fa-edit fa-2x text-blue"></i></a> <a href="#"><i  id="{{$usuario->id}}" class="fa fa-trash-alt fa-2x text-red delete"></i></a></td>   
                <td>{{ $usuario->id}}</td>
                <td>{{ $usuario->nombre}}</td>
                <td>{{ $usuario->apellidoPaterno }}</td>
                <td>{{ $usuario->apellidoMaterno }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->Roles->nombreRol}}</td>
                <td>{{ $usuario->Empresa->nombreEmpresa}}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Name</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Empresa</th> 
            </tr>            
        </tfoot>
    </table>
    <script>
        $(".delete").on('click', function(){
            let ID = $(this).attr('id')
            if (confirm('Are you sure you want to delete this')){
            $.post('/usuarios/delete/'+ID,
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