<?php

use Illuminate\Database\Seeder;
use App\Compra;
use App\Distribuidor;
use App\Material;

class ComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $distribuidor1 = Distribuidor::where('giro_emp', 'Hilos de Polipropileno')->first();
        $distribuidor2 = Distribuidor::where('giro_emp', 'Carpinteria Oro de Caoba')->first();
        $distribuidor3 = Distribuidor::where('giro_emp', 'Ferreteria del Istmo')->first();


        $compra = new Compra();
        $compra->fecha = '2019-01-04';
        $compra->distribuidor_id = $distribuidor1->distribuidor_id;
        $compra->save();

        $materialId = 1;
        $increment = 10;
        $compra->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->increment('cantidad', $increment);

        $materialId = 2;
        $increment = 55;
        $compra->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->increment('cantidad', $increment);

        $materialId = 3;
        $increment = 42;
        $compra->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->increment('cantidad', $increment);

        //

        $compra = new Compra();
        $compra->fecha = '2019-01-05';
        $compra->distribuidor_id = $distribuidor2->distribuidor_id;
        $compra->save();

        $materialId = 4;
        $increment = 101;
        $compra->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->increment('cantidad', $increment);

        //

        $compra = new Compra();
        $compra->fecha = '2019-01-06';
        $compra->distribuidor_id = $distribuidor3->distribuidor_id;
        $compra->save();

        $materialId = 5;
        $increment = 67;
        $compra->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->increment('cantidad', $increment);

        $materialId = 6;
        $increment = 9;
        $compra->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->increment('cantidad', $increment);

        //

        $compra = new Compra();
        $compra->fecha = '2019-01-04';
        $compra->distribuidor_id = $distribuidor1->distribuidor_id;
        $compra->save();

        $materialId = 7;
        $increment = 213;
        $compra->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->increment('cantidad', $increment);

        $materialId = 8;
        $increment = 2;
        $compra->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->increment('cantidad', $increment);

    }
}
