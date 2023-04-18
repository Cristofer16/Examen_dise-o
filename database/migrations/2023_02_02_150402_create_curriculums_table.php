<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculums', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('especialidad', 40);
            $table -> string('titulo_mayor', 30);
            $table -> string('cantidad_documentos', 3);
            $table -> unsignedBigInteger('documento_id');
            $table -> foreign('documento_id') -> references('id') -> on('documentos');
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
        Schema::dropIfExists('curriculums');
    }
}
