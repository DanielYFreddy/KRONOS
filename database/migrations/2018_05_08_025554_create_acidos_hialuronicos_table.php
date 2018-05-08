<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcidosHialuronicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acidosHialuronicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('motivoConsulta_id')->unsigned();
            $table->date('fechaAplicacion');
            $table->string('numeroLote');
            $table->string('productoInyectado');
            $table->string('dilucion');
            $table->string('totalUnidades');
            $table->mediumText('anestesia');
            $table->mediumText('observaciones');

            //Llaves Foraneas
            $table->foreign('motivoConsulta_id')->references('id')->on('motivosConsultas');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE acidosHialuronicos ADD archivo LONGBLOB");
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acidosHialuronicos');
    }
}
