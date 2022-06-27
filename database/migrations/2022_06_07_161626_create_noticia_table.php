<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia', function (Blueprint $table) {
            $table->integer('ID_NOTICIA', true);
            $table->string('TITULO_NOTICIA', 80);
            $table->string('DESCRIPCION_NOTICIA', 300);
            $table->string('IMAGEN_NOTICIA', 1000);
            $table->unsignedBigInteger('ID_USUARIO_NOTICIA')->index('ID_USUARIO_NOTICIA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticia');
    }
}
