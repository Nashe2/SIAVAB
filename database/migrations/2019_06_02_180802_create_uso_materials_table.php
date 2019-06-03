<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsoMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uso_materials', function (Blueprint $table) {
            $table->increments('usomate_id');
            $table->integer('cantidad');
           
            //m:m material:creacionmaterial
            $table->integer("material_id")->unsigned();
            $table->foreign("material_id")->references("id")->on("materials");

            $table->integer("creacion_id")->unsigned();//
            $table->foreign("creacion_id")->references("creacion_id")->on("creacion_materials");//

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
        Schema::dropIfExists('uso_materials');
    }
}
