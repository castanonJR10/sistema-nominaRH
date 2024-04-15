@extends('layouts.master')
@section('contenido')
    <div class="row">
        <a href="{{route('roles.create')}}" class="btn  btn-sm btn-primary">Agregar Rol</a>
    </div>
    <table class="table table-sm table-bordered table-stripped">
        <thead class="table-primary">
            <tr>
                <th></th>
                <th>ID</th>
                <th>Nombre Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Roles as $rol)
            <tr id="row_{{$rol->id}}">
             <td><a href="{{route('roles.edit',$rol->id)}}"><i style="cursor: pointer;" class="fa fa-edit fa-2x text-blue"></i></a><i  id="{{$rol->id}}" class="fa fa-trash-alt fa-2x text-red delete"></i></td>   
             <td>{{ $rol->id}}</td>
             <td>{{ $rol->nombreRol}}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Nombre Rol</th>
                </tr>            
        </tfoot>
    </table>
    <script>
        $(".delete").on('click', function(){
            let ID = $(this).attr('id')
            if (confirm('Are you sure you want to delete this')){
            $.post('/roles/delete/'+ID,
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