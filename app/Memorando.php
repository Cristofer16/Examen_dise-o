<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memorando extends Model
{
    protected $table = "memorandos";

    public function documento() {
        return $this -> belongsTo(Documento::class);
    }
}
