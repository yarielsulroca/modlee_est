<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosFKEventosTipoEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table->foreign('id_tipo_evento', 'FK_eventos_tipo_evento')->references('id')->on('tipo_evento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eventos', function(Blueprint $table){
            $table->dropForeign('FK_eventos_tipo_evento');
        });
    }
}
