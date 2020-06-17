<?php

use Illuminate\Database\Seeder;
use App\Distribuidor;

class DistribuidorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $distribuidors=new Distribuidor();
        $distribuidors->giro_emp='Hilos de Polipropileno';
        $distribuidors->persona_id= Personas::where('id_persona', ?)first()->id;
		$distribuidor->save();

		$distribuidors=new Distribuidor();
        $distribuidors->giro_emp='Carpinteria Oro de Caoba';
		$distribuidor->save();

		$distribuidors=new Distribuidor();
        $distribuidors->giro_emp='Ferreteria del Istmo';
		$distribuidor->save();
    }
}
