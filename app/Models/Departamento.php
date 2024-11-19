<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';

    public function trabajadores() {
        return $this->hasMany(Trabajador::class);
    }
}
