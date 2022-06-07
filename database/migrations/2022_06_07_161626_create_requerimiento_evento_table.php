<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequerimientoEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requerimiento_evento', function (Blueprint $table) {
            $table->integer('ID_REQUERIMIENTO_EVENTO', true);
            $table->integer('REQUERIMENTO_ID')->index('REQUERIMENTO_ID');
            $table->integer('EVENTO_ID')->index('EVENTO_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requerimiento_evento');
    }
}
