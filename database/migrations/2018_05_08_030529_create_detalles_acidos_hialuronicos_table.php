<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesAcidosHialuronicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesAcidosHialuronicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acidoHialuronico_id')->unsigned();
            $table->string('region');
            $table->string('unidades');

            //Llaves Foraneas
            $table->foreign('acidoHialuronico_id')->references('id')->on('acidosHialuronicos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallesAcidosHialuronicos');
    }
}
