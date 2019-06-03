<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_compras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            
            //m:m compra:material
            $table->integer("compras_id")->unsigned();
            $table->foreign("compras_id")->references("id")->on("compras");
            $table->integer("material_id")->unsigned();//
            $table->foreign("material_id")->references("id")->on("materials");
            
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
        Schema::dropIfExists('detalles_compras');
    }
}
