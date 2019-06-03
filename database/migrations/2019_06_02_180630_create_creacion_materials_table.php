<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreacionMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creacion_materials', function (Blueprint $table) {
            $table->increments('creacion_id');
            $table->date('fecha');
            
            //1:m artesano:creacionmaterial
            $table->integer("artesano_id")->unsigned();
            $table->foreign("artesano_id")->references("artesano_id")->on("artesanos");
            
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
        Schema::dropIfExists('creacion_materials');
    }
}
