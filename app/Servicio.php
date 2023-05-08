<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicios";

    public function documento() {
        return $this -> belongsTo(Documento::class);
    }
}
