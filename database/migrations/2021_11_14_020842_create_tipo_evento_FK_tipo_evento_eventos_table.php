<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoEventoFKTipoEventoEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tipo_evento', function (Blueprint $table) {
            $table->foreign('id', 'FK_tipo_evento_eventos')->references('id_tipo_evento')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipo_evento', function(Blueprint $table){
            $table->dropForeign('FK_tipo_evento_eventos');
        });
    }
}
