<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');

            //1:m distribuidor:compra
            $table->integer("distribuidor_id")->unsigned();
            $table->foreign("distribuidor_id")->references("distribuidor_id")->on("distribuidors");
            //No lleva el id de material
            //$table->bigIncrements('material_id');//
            //$table->foreign('material_id')->references('material_id')->on('materials');//
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
        Schema::dropIfExists('compras');
    }
}
