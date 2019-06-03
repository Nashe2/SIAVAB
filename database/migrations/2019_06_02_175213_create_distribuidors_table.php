<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistribuidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribuidors', function (Blueprint $table) {
            $table->increments('distribuidor_id');
            $table->string('giro_emp');

            //1:1 persona:distribuidor
            $table->integer("persona_id")->unsigned();
            $table->foreign("persona_id")->references("id")->on("personas");
            
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
        Schema::dropIfExists('distribuidors');
    }
}
