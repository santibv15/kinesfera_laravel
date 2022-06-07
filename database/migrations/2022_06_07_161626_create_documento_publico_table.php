<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoPublicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_publico', function (Blueprint $table) {
            $table->integer('ID_DOCUMENTO', true);
            $table->string('TITULO_DOCUMENTO', 70);
            $table->string('DESCRIPCION_DOCUMENTO', 400);
            $table->string('ARCHIVO_DOCUMENTO', 6000);
            $table->integer('PAGINAS_DOCUMENTO')->nullable();
            $table->string('IMAGEN_DOCUMENTO', 1000);
            $table->integer('TEMA_DOCUMENTO')->index('TEMA_DOCUMENTO');
            $table->integer('CLASE_DOCUMENTO')->index('CLASE_DOCUMENTO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documento_publico');
    }
}
