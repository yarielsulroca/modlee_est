<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfecionesFKProfecionesParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profeciones', function (Blueprint $table) {
            $table->foreign('id_participante', 'FK_profeciones_participantes')->references('id')->on('participantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profeciones', function(Blueprint $table){
            $table->dropForeign('FK_profeciones_participantes');
        });
    }
}
