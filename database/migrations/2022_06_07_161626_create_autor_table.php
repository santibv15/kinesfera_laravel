<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor', function (Blueprint $table) {
            $table->integer('ID_AUTOR', true);
            $table->string('NOMBRE_AUTOR', 70);
            $table->string('APELLIDO_AUTOR', 80);
            $table->integer('EDAD_AUTOR')->nullable();
            $table->string('DESCRIPCION_AUTOR', 150)->nullable();
            $table->integer('NACIONALIDAD_AUTOR')->index('NACIONALIDAD_AUTOR');
            $table->string('FOTO_AUTOR', 6000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autor');
    }
}
