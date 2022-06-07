<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('noticia', function (Blueprint $table) {
            $table->foreign(['ID_USUARIO_NOTICIA'], 'noticia_ibfk_1')->references(['ID_USUARIO'])->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('noticia', function (Blueprint $table) {
            $table->dropForeign('noticia_ibfk_1');
        });
    }
}
