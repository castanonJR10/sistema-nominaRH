<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Empleados extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'empleados';

    public function Empresa(){
        return $this->hasOne('App\Models\Empresa','id', 'empresa_id')->withDefault(['nombreEmpresa'=>'']);
    }

    public function Departamento(){
        return $this->hasOne('App\Models\Departamentos','id', 'departamento_id')->withDefault(['nombreDepartamento'=>'']);
    }
    
    public function TipoEmpleado(){
        return $this->hasOne('App\Models\TipoEmpleado','id', 'tipoEmpleado_id')->withDefault(['descripción'=>'']);
    }
}
