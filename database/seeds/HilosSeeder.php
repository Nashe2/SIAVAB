<?php

use Illuminate\Database\Seeder;
use App\Hilo;
use App\Material;
use App\Color;

class HilosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $material1 = Material::where('nombre', 'Hilo1')->first()->id;
        $material2 = Material::where('nombre', 'Hilo2')->first()->id;
        $material3 = Material::where('nombre', 'Hilo3')->first()->id;
        $material4 = Material::where('nombre', 'Hilo4')->first()->id;
        $material5 = Material::where('nombre', 'Hilo5')->first()->id;
        $material6 = Material::where('nombre', 'Hilo6')->first()->id;
        $material7 = Material::where('nombre', 'Hilo7')->first()->id;

        $color1 = Color::where('rgb','#4a235a')->first()->color_id;
        $color2 = Color::where('rgb','#e8daef')->first()->color_id;
        $color3 = Color::where('rgb','#17202a')->first()->color_id;
        $color4 = Color::where('rgb','#808b96')->first()->color_id;
        $color5 = Color::where('rgb','#ccd1d1')->first()->color_id;
        $color6 = Color::where('rgb','#ffffff')->first()->color_id;
        $color7 = Color::where('rgb','#000000')->first()->color_id;

        $hilo = new Hilo();
        $hilo->tipo = 'Fino';
        $hilo->material_id = $material1;
        $hilo->color_id = $color1;
        $hilo->save();

        $hilo = new Hilo();
        $hilo->tipo = 'Fino';
        $hilo->material_id = $material2;
        $hilo->color_id = $color2;
        $hilo->save();

        $hilo = new Hilo();
        $hilo->tipo = 'Fino';
        $hilo->material_id = $material3;
        $hilo->color_id = $color3;
        $hilo->save();

        $hilo = new Hilo();
        $hilo->tipo = 'Fino';
        $hilo->material_id = $material4;
        $hilo->color_id = $color4;
        $hilo->save();

        $hilo = new Hilo();
        $hilo->tipo = 'Grueso';
        $hilo->material_id = $material5;
        $hilo->color_id = $color5;
        $hilo->save();

        $hilo = new Hilo();
        $hilo->tipo = 'Grueso';
        $hilo->material_id = $material6;
        $hilo->color_id = $color6;
        $hilo->save();

        $hilo = new Hilo();
        $hilo->tipo = 'Grueso';
        $hilo->material_id = $material7;
        $hilo->color_id = $color7;
        $hilo->save();

    }
}
