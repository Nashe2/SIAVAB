<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produccions', function (Blueprint $table) {
            $table->increments('produccion_id');
            $table->integer('precio_fab');
            $table->date('fecha_ini');
            $table->date('fecha_ter');
            
            //m:m artesanos:productos
            $table->integer("artesano_id")->unsigned();
            $table->foreign("artesano_id")->references("artesano_id")->on("artesanos");

            $table->integer("producto_id")->unsigned();
            $table->foreign("producto_id")->references("id")->on("productos");
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
        Schema::dropIfExists('produccions');
    }
}
