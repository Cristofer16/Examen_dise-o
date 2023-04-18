<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemorandosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memorandos', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('numero_memorando', 15);
            $table -> string('tipo', 30);
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
        Schema::dropIfExists('memorandos');
    }
}
