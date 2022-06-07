<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositorio', function (Blueprint $table) {
            $table->integer('ID_REPOSITORIO', true);
            $table->string('NOMBRE_REPOSITORIO', 80);
            $table->integer('CANTIDAD_IMAGEN');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repositorio');
    }
}
