<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	CleanTableSeeder::class,

            PersonasSeeder::class,

        	ArtesanosSeeder::class,

        	MaterialsSeeder::class,
        	ColoresSeeder::class,

        	DistribuidoresSeeder::class,

        	ComprasSeeder::class,

        	HilosSeeder::class,

            CreacionMaterialesSeeder::class,

            ProductosSeeder::class,

            ShoppingCartsSeeder::class,
        ]);
    }
}
