<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoInShoppingCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_in_shopping_carts', function (Blueprint $table) {
            $table->increments('id');


            $table->integer("producto_id")->unsigned();
            $table->foreign("producto_id")->references("id")->on("productos");

            $table->integer("shopping_cart_id")->unsigned();//
            $table->foreign("shopping_cart_id")->references("id")->on("shopping_carts");

            $table->integer("amount")->default(1);
            
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
        Schema::dropIfExists('producto_in_shopping_carts');
    }
}
