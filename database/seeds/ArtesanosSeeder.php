<?php

use Illuminate\Database\Seeder;
use App\Artesano;
use App\Persona;

class ArtesanosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artesano = new Artesano();
        $artesano->categoria = "avanzado";
        $artesano->discapacidad = true;
        $artesano->persona_id = Persona::where('rfc','OOVB640922HOCSRR02')->first()->id;
        $artesano->save();

        $artesano = new Artesano();
        $artesano->categoria = "avanzado";
        $artesano->discapacidad = true;
        $artesano->persona_id = Persona::where('rfc','LOGE800624MQTPTS03')->first()->id;
        $artesano->save();

        $artesano = new Artesano();
        $artesano->categoria = "intermedio";
        $artesano->discapacidad = false;
        $artesano->persona_id = Persona::where('rfc','SARR770306MCSNSS02')->first()->id;
        $artesano->save();

        $artesano = new Artesano();
        $artesano->categoria = "intermedio";
        $artesano->discapacidad = false;
        $artesano->persona_id = Persona::where('rfc','AABF780518MJCLRL04')->first()->id;
        $artesano->save();

        $artesano = new Artesano();
        $artesano->categoria = "principiante";
        $artesano->discapacidad = false;
        $artesano->persona_id = Persona::where('rfc','MACA870903HSPRDB04')->first()->id;
        $artesano->save();

		$artesano = new Artesano();
        $artesano->categoria = "avanzado";
        $artesano->discapacidad = false;
        $artesano->persona_id = Persona::where('rfc','AABF890415MHGLTR07')->first()->id;
        $artesano->save();

        $artesano = new Artesano();
        $artesano->categoria = "avanzado";
        $artesano->discapacidad = true;
        $artesano->persona_id = Persona::where('rfc','CURJ860410HDFRMN04')->first()->id;
        $artesano->save();

    }
}
