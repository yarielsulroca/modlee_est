<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('id_tipo_evento');
            $table->integer('id_munucipio');
            $table->integer('id_participantes');
            $table->integer('id_img')->nullable()->default(0);
            $table->string('nombre', 50)->nullable()->default('');
            $table->integer('descripcio')->nullable()->default(0);
            $table->integer('nivel')->default(0);
            $table->integer('activo')->default(0);
            $table->time('hora_inicio');
            $table->time('duracion')->nullable();
            $table->string('direccion', 100)->nullable();
            $table->float('clasificacion')->nullable();
            
            $table->foreign('id_munucipio', 'FK_eventos_municipios')->references('id')->on('municipios');
            $table->foreign('id_participantes', 'FK_eventos_participantes')->references('id')->on('participantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
