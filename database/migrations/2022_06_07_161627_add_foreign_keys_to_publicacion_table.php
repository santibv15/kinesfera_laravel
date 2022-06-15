<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPublicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publicacion', function (Blueprint $table) {
            $table->foreign(['ID_USUARIO_PUBLIC'], 'publicacion_ibfk_1')->references(['ID_USUARIO'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publicacion', function (Blueprint $table) {
            $table->dropForeign('publicacion_ibfk_1');
        });
    }
}
