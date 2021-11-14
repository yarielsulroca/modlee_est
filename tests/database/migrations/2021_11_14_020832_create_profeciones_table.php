<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfecionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profeciones', function (Blueprint $table) {
            $table->integer('id')->index('id');
            $table->integer('id_participante');
            $table->string('profecion', 50)->nullable();
            $table->string('descripcion', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profeciones');
    }
}
