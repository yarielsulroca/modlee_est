<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->integer('id');
            $table->binary('principal')->nullable();
            $table->binary('sec1')->nullable();
            $table->binary('sec2')->nullable();
            $table->binary('sec3')->nullable();
            $table->binary('sec4')->nullable();
            $table->binary('sec5')->nullable();
            $table->binary('sec6')->nullable();
            $table->binary('sec7')->nullable();
            $table->binary('sec8')->nullable();
            $table->binary('sec9')->nullable();
            $table->binary('sec10')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagenes');
    }
}
