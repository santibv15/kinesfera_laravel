<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('imagenes', function (Blueprint $table) {
            $table->foreign(['ID_CLASE_IMAGEN'], 'imagenes_ibfk_1')->references(['ID_CLASE'])->on('clase');
            $table->foreign(['ID_USUARIO_IMAGEN'], 'imagenes_ibfk_3')->references(['ID_USUARIO'])->on('users');
            $table->foreign(['ID_REPOSITORIO_IMAGEN'], 'imagenes_ibfk_2')->references(['ID_REPOSITORIO'])->on('repositorio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imagenes', function (Blueprint $table) {
            $table->dropForeign('imagenes_ibfk_1');
            $table->dropForeign('imagenes_ibfk_3');
            $table->dropForeign('imagenes_ibfk_2');
        });
    }
}
