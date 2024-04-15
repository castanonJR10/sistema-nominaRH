@extends('layouts.master')
@section('contenido')
    <div class="row">
        <a href="{{route('empresas.create')}}" class="btn  btn-sm btn-primary">Agregar Empresa</a>
    </div>
    <table class="table table-sm table-bordered table-stripped">
        <thead class="table-primary">
            <tr>
                <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>RFC</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Empresas as $empresa)
            <tr id="row_{{$empresa->id}}">
             <td><a href="{{route('empresas.edit',$empresa->id)}}"><i class="fa fa-edit fa-2x text-blue"></i></a> <a href="#"><i  id="{{$empresa->id}}" class="fa fa-trash-alt fa-2x text-red delete"></i></a></td>   
             <td>{{ $empresa->id}}</td>
             <td>{{ $empresa->nombreEmpresa}}</td>
             <td>{{ $empresa->rfc}}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>RFC</th>
                </tr>            
        </tfoot>
    </table>
    <script>
        $(".delete").on('click', function(){
            let ID = $(this).attr('id')
            if (confirm('Are you sure you want to delete this')){
            $.post('/empresas/delete/'+ID,
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