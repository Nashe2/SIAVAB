<?php

use Illuminate\Database\Seeder;
use App\Color;

class ColoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $color = new Color();
        $color->rgb = '#4a235a';
        $color->descripcion = 'morado de intensidad fuerte';
        $color->save();

        $color = new Color();
        $color->rgb = '#e8daef';
        $color->descripcion = 'lila de intensidad baja';
        $color->save();

        $color = new Color();
        $color->rgb = '#17202a';
        $color->descripcion = 'negro claro';
        $color->save();

        $color = new Color();
        $color->rgb = '#808b96';
        $color->descripcion = 'gris oscuro';
        $color->save();

        $color = new Color();
        $color->rgb = '#ccd1d1';
        $color->descripcion = 'plateado';
        $color->save();

        $color = new Color();
        $color->rgb = '#ffffff';
        $color->descripcion = 'blanco';
        $color->save();

        $color = new Color();
        $color->rgb = '#000000';
        $color->descripcion = 'negro';
        $color->save();
    }
}
