<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuarios extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'usuarios';

    public function Empresa(){
        return $this->hasOne('App\Models\Empresa', 'id', 'empresa_id')->withDefault(['nombreEmpresa' => '']);
    }

    public function Roles(){
        return $this->hasOne('App\Models\Roles', 'id', 'role_id')->withDefault(['nombreRol'=>'']);
    }

}
