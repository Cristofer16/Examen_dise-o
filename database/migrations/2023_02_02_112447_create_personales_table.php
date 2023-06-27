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
            $table -> string('apellido_paterno', 20) -> nullable();
            $table -> string('apellido_materno', 20);
            $table -> string('telefono', 10) -> nullable();
            $table -> string('celular', 10) -> nullable();
            $table -> string('ci', 12) -> unique();
            $table -> string('domicilio', 45);
            $table -> string('tipo_contrato', 20);
            $table -> string('activo', 1) -> default("S");
            $table -> unsignedBigInteger('user_id');
            $table -> foreign('user_id') -> references('id') -> on('users');
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
