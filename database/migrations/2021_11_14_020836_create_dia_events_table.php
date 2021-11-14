<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dia_events', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('id_evento');
            
            $table->foreign('id_evento', 'FK_dia_events_eventos')->references('id')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dia_events');
    }
}
