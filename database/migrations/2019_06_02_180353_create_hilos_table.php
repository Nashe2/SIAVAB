<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHilosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hilos', function (Blueprint $table) {
            $table->increments('hilo_id');
            $table->string('tipo');
            
            //m:m material:color
            $table->integer("material_id")->unsigned();//
            $table->foreign("material_id")->references("id")->on("materials");//


            $table->integer("color_id")->unsigned();//
            $table->foreign("color_id")->references("color_id")->on("colors");//

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
        Schema::dropIfExists('hilos');
    }
}
