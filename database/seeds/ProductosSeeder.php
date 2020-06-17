<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $producto = new Producto();
        $producto->title = 'Hamaca';
        $producto->description = 'matrimonial color azul';
        $producto->price = 3200;
        $producto->cantidad = 15;
        $producto->image_url = '';
        $producto->save();
        $producto->artesanos()->attach(1, ['precio_fab' => 814, 'fecha_ini' => now(), 'fecha_ter' => now()]);


        $producto = new Producto();
        $producto->title = 'Perezosa';
        $producto->description = 'mediana color morado';
        $producto->price = 2500;
        $producto->cantidad = 15;
        $producto->image_url = '';
        $producto->save();
        $producto->artesanos()->attach(2, ['precio_fab' => 814, 'fecha_ini' => now(), 'fecha_ter' => now()]);

        $producto = new Producto();
        $producto->title = 'Catre';
        $producto->description = 'tejido cerrado';
        $producto->price = 2500;
        $producto->cantidad = 15;
        $producto->image_url = '';
        $producto->save();
        $producto->artesanos()->attach(3, ['precio_fab' => 814, 'fecha_ini' => now(), 'fecha_ter' => now()]);

        $producto = new Producto();
        $producto->title = 'Columpio';
        $producto->description = 'hawaiano';
        $producto->price = 2200;
        $producto->cantidad = 15;
        $producto->image_url = '';
        $producto->save();
        $producto->artesanos()->attach(4, ['precio_fab' => 814, 'fecha_ini' => now(), 'fecha_ter' => now()]);

    }
}
