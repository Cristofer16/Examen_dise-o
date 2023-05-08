<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NuevaTabla extends Model
{
    protected $table = "nuevastablas";

    public function user() {
        return $this -> belongsTo(User::class);
    }
}
