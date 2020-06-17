<?php

use Illuminate\Database\Seeder;
use App\ShoppingCart;
use App\ProductoInShoppingCart;

class ShoppingCartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoping = new ShoppingCart();
        $shoping->status = 0;
        $shoping->email = 'test@test.com';
        $shoping->save();
        $shoping->productoss()->attach(1, ['amount' => 3200]);
        $shoping->productoss()->attach(4, ['amount' => 2200]);

        $shoping = new ShoppingCart();
        $shoping->status = 1;
        $shoping->email = 'test@test.com';
        $shoping->save();
        $shoping->productoss()->attach(2, ['amount' => 2500]);

        $shoping = new ShoppingCart();
        $shoping->status = 2;
        $shoping->email = 'test@test.com';
        $shoping->save();
        $shoping->productoss()->attach(3, ['amount' => 2500]);
    }
}
