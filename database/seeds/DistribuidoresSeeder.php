<?php

use Illuminate\Database\Seeder;
use App\Persona;
use App\Distribuidor;

class DistribuidoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $distribuidor = new Distribuidor();
        $distribuidor->giro_emp = 'Hilos de Polipropileno';
        $distribuidor->persona_id = Persona::where('rfc','OOGM970127MOCSZR09')->first()->id;
        $distribuidor->save();

        $distribuidor = new Distribuidor();
        $distribuidor->giro_emp = 'Carpinteria Oro de Caoba';
        $distribuidor->persona_id = Persona::where('rfc','AOJE821228HVZNMV02')->first()->id;
        $distribuidor->save();

        $distribuidor = new Distribuidor();
        $distribuidor->giro_emp = 'Ferreteria del Istmo';
        $distribuidor->persona_id = Persona::where('rfc','LOMJ670808MOCPRN06')->first()->id;
        $distribuidor->save();

    }
}
