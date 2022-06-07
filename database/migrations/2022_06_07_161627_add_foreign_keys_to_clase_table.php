<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToClaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clase', function (Blueprint $table) {
            $table->foreign(['ID_CATEGORIA_CLASE'], 'clase_ibfk_1')->references(['ID_CATEGORIA'])->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clase', function (Blueprint $table) {
            $table->dropForeign('clase_ibfk_1');
        });
    }
}
