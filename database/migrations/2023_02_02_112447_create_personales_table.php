<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personales', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('nombres', 30);
            $table -> string('apellido_paterno', 20) -> nullable(false);
            $table -> string('apellido_materno', 20);
            $table -> string('telefono', 10)->nullable(false);
            $table -> string('celular', 10);
            $table -> string('ci', 12)->unique();
            $table -> string('domicilio', 45);
            $table -> string('tipo_contrato', 20);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personales');
    }
}
