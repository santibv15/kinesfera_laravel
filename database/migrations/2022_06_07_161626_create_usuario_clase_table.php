<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioClaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_clase', function (Blueprint $table) {
            $table->integer('ID_USUARIO_CARGO', true);
            $table->unsignedBigInteger('USUARIO_ID')->index('USUARIO_ID');
            $table->integer('CLASE_ID')->index('CLASE_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_clase');
    }
}
