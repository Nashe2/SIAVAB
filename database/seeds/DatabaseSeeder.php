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
<<<<<<< HEAD
    	// Esto va a correr si usas el php artisan db:seed ó php artisan migrate:refresh --seed
    	$this->call([
    		// Si quieres borrar tu base de datos descomentas esto, esto servira si haces cambios drasticos en tus schemas y se ropen tus migraciones
    		CleanTableSeeder::class,
    		// De aquí en adelante tendras que poner los demas seeders para rellenar la tabla
    		//Por el momento y por motivos practicos comentare lo de clean para no borrar todo y solo veas que se agregan los registros que pusimos
    		PersonasSeeder::class,
    		//DistribuidorsSeeder:class 
    	]);

=======
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
>>>>>>> 9bda8cdaac0303cd3f990e65aeb9ab7e8f9d224d
    }
}
