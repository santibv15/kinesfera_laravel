<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clase', function (Blueprint $table) {
            $table->integer('ID_CLASE', true);
            $table->string('NOMBRE_CLASE', 80);
            $table->string('DESCRIPCION_CLASE', 350);
            $table->string('JORNADA_CLASE', 30);
            $table->string('HORARIOS_CLASE', 50);
            $table->decimal('COSTO_CLASE', 10, 0);
            $table->string('TIEMPO_CLASE', 50)->nullable();
            $table->string('IMAGEN_CLASE', 1000);
            $table->integer('ID_CATEGORIA_CLASE')->index('ID_CATEGORIA_CLASE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clase');
    }
}
