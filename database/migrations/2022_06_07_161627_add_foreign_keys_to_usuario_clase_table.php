<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsuarioClaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuario_clase', function (Blueprint $table) {
            $table->foreign(['USUARIO_ID'], 'usuario_clase_ibfk_1')->references(['ID_USUARIO'])->on('usuario');
            $table->foreign(['CLASE_ID'], 'usuario_clase_ibfk_2')->references(['ID_CLASE'])->on('clase');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario_clase', function (Blueprint $table) {
            $table->dropForeign('usuario_clase_ibfk_1');
            $table->dropForeign('usuario_clase_ibfk_2');
        });
    }
}
