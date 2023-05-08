<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = "personales";

    public function user() {
        return $this -> belongsTo(User::class);
    }
    
    public function documentos() {
        return $this -> hasMany(Documento::class);
    }
}
