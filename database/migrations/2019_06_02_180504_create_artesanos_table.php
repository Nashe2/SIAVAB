<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtesanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artesanos', function (Blueprint $table) {
            $table->increments('artesano_id');
            $table->string('categoria');
            $table->boolean('discapacidad');

            //1:1 persona:artesano
            $table->integer("persona_id")->unsigned();//
            $table->foreign("persona_id")->references("id")->on("personas");//

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
        Schema::dropIfExists('artesanos');
    }
}
