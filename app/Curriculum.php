<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table = "curriculums";

    public function documento() {
        return $this -> belongsTo(Documento::class);
    }
}
