<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBajasmedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bajasmedicas', function (Blueprint $table) {
            $table -> increments('id');
            $table -> date('fecha_inicio');
            $table -> date('fecha_fin');
            $table -> unsignedBigInteger('documento_id');
            $table -> foreign('documento_id') -> reference('id') -> on('documentos');
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
        Schema::dropIfExists('bajasmedicas');
    }
}
