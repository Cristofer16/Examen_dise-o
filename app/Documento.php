<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = "documentos";

    public function user() {
        return $this -> belongsTo(User::class);
    }
    
    public function personal() {
        return $this -> belongsTo(Personal::class);
    }

    public function bajamedica() {
        return $this -> hasOne(BajaMedica::class);
    }

    public function declaracionjurada() {
        return $this -> hasOne(DeclaracionJurada::class);
    }

    public function memorando() {
        return $this -> hasOne(Memorando::class);
    }

    public function servicio() {
        return $this -> hasOne(Servicio::class);
    }

    public function curriculum() {
        return $this -> hasOne(Curriculum::class);
    }

    public function vacacion() {
        return $this -> hasOne(Vacacion::class);
    }
}
