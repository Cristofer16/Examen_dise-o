<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('nombre', 30);
            $table -> string('apellido_paterno', 20) -> nullable(false);
            $table -> string('apellido_materno', 20);
            $table -> string('usuario', 30) -> unique();
            $table -> string('contraseña', 45);
            $table -> string('estado', 1) -> default("A");
            $table -> string('tipo', 15);
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
        Schema::dropIfExists('users');
    }
}
