<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacion', function (Blueprint $table) {
            $table->integer('ID_PUBLICACION', true);
            $table->string('TITULO_PUBLIC', 80);
            $table->string('DESCRIPCION_PUBLIC', 200);
            $table->string('ARCHIVO_PUBLIC', 1000);
            $table->date('FECHA_PUBLIC');
            $table->time('HORA_PUBLIC');
            $table->unsignedBigInteger('ID_USUARIO_PUBLIC')->index('ID_USUARIO_PUBLIC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacion');
    }
}
