<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacacion extends Model
{
    protected $table = "vacaciones";

    public function documento() {
        return $this -> belongsTo(Documento::class);
    }
}
