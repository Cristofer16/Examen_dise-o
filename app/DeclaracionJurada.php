<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeclaracionJurada extends Model
{
    protected $table = "declaracionesjuradas";

    public function documento() {
        return $this -> belongsTo(Documento::class);
    }
}
