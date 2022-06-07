<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->integer('ID_IMAGENES', true);
            $table->string('TITULO_IMAGEN', 80);
            $table->string('DESCRIPCION_IMAGEN', 300)->nullable();
            $table->string('ARCHIVO_IMAGEN', 1000);
            $table->integer('ID_CLASE_IMAGEN')->index('ID_CLASE_IMAGEN');
            $table->integer('ID_REPOSITORIO_IMAGEN')->index('ID_REPOSITORIO_IMAGEN');
            $table->integer('ID_USUARIO_IMAGEN')->index('ID_USUARIO_IMAGEN');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagenes');
    }
}
