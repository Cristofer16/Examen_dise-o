<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeclaracionesjuradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declaracionesjuradas', function (Blueprint $table) {
            $table -> increments('id');
            $table -> date('gestion');
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
        Schema::dropIfExists('declaracionesjuradas');
    }
}
