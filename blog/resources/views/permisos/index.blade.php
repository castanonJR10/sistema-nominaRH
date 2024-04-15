@extends('layouts.master')
@section('contenido')
    <div class="row">
        <a href="{{route('permisos.create')}}" class="btn  btn-sm btn-primary">Agregar Permiso</a>
    </div>
    <table class="table table-sm table-bordered table-stripped">
        <thead class="table-primary">
            <tr>
                <th></th>
                <th>ID</th>
                <th>Nombre Permiso</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Permisos as $permiso)
            <tr id="row_{{$permiso->id}}">
             <td><a href="{{route('permisos.edit',$permiso->id)}}"><i style="cursor: pointer;" class="fa fa-edit fa-2x text-blue"></i></a><i  id="{{$permiso->id}}" class="fa fa-trash-alt fa-2x text-red delete"></i></td>   
             <td>{{ $permiso->id}}</td>
             <td>{{ $permiso->nombrePermiso}}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Nombre Permiso</th>
                </tr>            
        </tfoot>
    </table>
    <script>
        $(".delete").on('click', function(){
            let ID = $(this).attr('id')
            if (confirm('Are you sure you want to delete this')){
            $.post('/permisos/delete/'+ID,
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