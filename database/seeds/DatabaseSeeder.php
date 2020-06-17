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
    	// Esto va a correr si usas el php artisan db:seed ó php artisan migrate:refresh --seed
    	$this->call([
    		// Si quieres borrar tu base de datos descomentas esto, esto servira si haces cambios drasticos en tus schemas y se ropen tus migraciones
    		CleanTableSeeder::class,
    		// De aquí en adelante tendras que poner los demas seeders para rellenar la tabla
    		//Por el momento y por motivos practicos comentare lo de clean para no borrar todo y solo veas que se agregan los registros que pusimos
    		PersonasSeeder::class,
    		//DistribuidorsSeeder:class 
    	]);

    }
}
