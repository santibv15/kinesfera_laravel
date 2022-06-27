<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('ID_USUARIO');
            $table->string('NOMBRES_USUARIO', 50);
            $table->string('APELLIDOS_USUARIO', 80);
            $table->integer('EDAD_USUARIO');
            $table->integer('TELEFONO_USUARIO');
            $table->string('CORREO_USUARIO', 70)->nullable();
            $table->string('CLAVE_USUARIO', 101);
            /* $table->integer('ID_CARGO_USUARIO')->index('ID_CARGO_USUARIO')->nullable); */
            $table->string('ESTADO_USUARIO', 20);
            $table->timestamps();
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
