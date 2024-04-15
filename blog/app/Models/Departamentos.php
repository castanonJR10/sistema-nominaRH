<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departamentos extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'departamentos';

    public function empresa(){
        return $this->hasOne('App\Models\Empresa','id', 'empresa_id');
    }
}
