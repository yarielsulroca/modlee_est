<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->integer('id')->index('id');
            $table->integer('id_participante')->nullable();
            $table->integer('id_profecion')->nullable();
            $table->string('nombre', 50)->nullable();
            $table->string('descripcion', 100)->nullable();
            
            $table->foreign('id_participante', 'FK_grupos_participantes')->references('id')->on('participantes');
            $table->foreign('id_profecion', 'FK_grupos_profeciones')->references('id')->on('profeciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
