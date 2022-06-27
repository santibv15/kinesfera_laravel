<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->integer('ID_EVENTO', true);
            $table->string('NOMBRE_EVENTO', 80);
            $table->string('DESCRIPCION_EVENTO', 400);
            $table->string('DIRECCION_EVENTO', 150);
            $table->time('HORA_EVENTO');
            $table->date('FECHA_EVENTO');
            $table->decimal('COSTO_EVENTO', 10, 0);
            $table->string('IMAGEN_EVENTO', 1000);
            $table->unsignedBigInteger('ID_USUARIO_EVENTO')->index('ID_USUARIO_EVENTO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
}
