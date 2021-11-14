<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesFKParticipantesProfecionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participantes', function (Blueprint $table) {
            $table->foreign('id_profecion', 'FK_participantes_profeciones')->references('id')->on('profeciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participantes', function(Blueprint $table){
            $table->dropForeign('FK_participantes_profeciones');
        });
    }
}
