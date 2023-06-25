<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('nombre', 50);
            $table -> string('archivero', 25);
            $table -> string('cajon', 3);
            $table -> string('ubicacion', 70);
            $table -> unsignedBigInteger('personal_id');
            $table -> foreign('personal_id') -> references('id') -> on('personales');
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
        Schema::dropIfExists('documentos');
    }
}
