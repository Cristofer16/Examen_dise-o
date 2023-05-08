<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BajaMedica extends Model
{
    protected $table = "bajasmedicas";

    public function documento() {
        return $this -> belongsTo(Documento::class);
    }
}
