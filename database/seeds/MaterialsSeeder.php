<?php

use Illuminate\Database\Seeder;
use App\Material;

class MaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$material = new Material();
        $material->nombre = 'Hilo1';
        $material->descripcion = 'De primera';
        $material->cantidad = 100;
        $material->precio_unitario = 200.00;
        $material->es_hilo = true;
        $material->save();

    	$material = new Material();
        $material->nombre = 'Hilo2';
        $material->descripcion = 'De tercera';
        $material->cantidad = 100;
        $material->precio_unitario = 70.00;
        $material->es_hilo = true;
        $material->save();

		$material = new Material();
        $material->nombre = 'Guardacabo';
        $material->descripcion = 'Mediano #12';
        $material->cantidad = 200;
        $material->precio_unitario = 7.00;
        $material->es_hilo = false;
        $material->save();

        $material = new Material();
        $material->nombre = 'Madera peresoza 2';
        $material->descripcion = 'Mediana';
        $material->cantidad = 25;
        $material->precio_unitario = 650.00;
        $material->es_hilo = false;
        $material->save();

        $material = new Material();
        $material->nombre = 'Madera peresoza 1';
        $material->descripcion = 'Chica';
        $material->cantidad = 25;
        $material->precio_unitario = 350.00;
        $material->es_hilo = false;
        $material->save();

        $material = new Material();
        $material->nombre = 'Madera peresoza 3';
        $material->descripcion = 'Grande';
        $material->cantidad = 25;
        $material->precio_unitario = 750.00;
        $material->es_hilo = false;
        $material->save();

        $material = new Material();
        $material->nombre = 'Madera Catre 1';
        $material->descripcion = 'Individual';
        $material->cantidad = 25;
        $material->precio_unitario = 1200.00;
        $material->es_hilo = false;
        $material->save();

        $material = new Material();
        $material->nombre = 'Madera Columpio';
        $material->descripcion = 'Mediano';
        $material->cantidad = 25;
        $material->precio_unitario = 650.00;
        $material->es_hilo = false;
        $material->save();

        $material = new Material();
        $material->nombre = 'Hilo3';
        $material->descripcion = 'De primera';
        $material->cantidad = 100;
        $material->precio_unitario = 200.00;
        $material->es_hilo = true;
        $material->save();

        $material = new Material();
        $material->nombre = 'Hilo4';
        $material->descripcion = 'De primera';
        $material->cantidad = 100;
        $material->precio_unitario = 200.00;
        $material->es_hilo = true;
        $material->save();

        $material = new Material();
        $material->nombre = 'Hilo5';
        $material->descripcion = 'De primera';
        $material->cantidad = 100;
        $material->precio_unitario = 200.00;
        $material->es_hilo = true;
        $material->save();

        $material = new Material();
        $material->nombre = 'Hilo6';
        $material->descripcion = 'De tercera';
        $material->cantidad = 100;
        $material->precio_unitario = 70.00;
        $material->es_hilo = true;
        $material->save();

        $material = new Material();
        $material->nombre = 'Hilo7';
        $material->descripcion = 'De tercera';
        $material->cantidad = 100;
        $material->precio_unitario = 70.00;
        $material->es_hilo = true;
        $material->save();
    }
}
