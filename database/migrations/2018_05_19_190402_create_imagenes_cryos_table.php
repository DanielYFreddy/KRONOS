<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenesCryosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenesCryos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cryo_id')->unsigned();
            
            //Llaves Foraneas
            $table->foreign('cryo_id')->references('id')->on('cryos');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE imagenesCryos ADD archivo LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagenesCryos');
    }
}
