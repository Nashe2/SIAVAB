<?php

use Illuminate\Database\Seeder;
use App\Persona;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$persona=new Persona();
        $persona->nombre='Paola Nashely';
        $persona->paterno='Osorio';
        $persona->materno='Guzman';
        $persona->nacimiento='1996-01-02';
        $persona->telefono='9711259956';
        $persona->rfc='OOGP960102MOCSZL01';
        $persona->sexo='Femenino';
		$persona->save();

		$persona=new Persona();
        $persona->nombre='Eva Maria';
        $persona->paterno='Guzman';
        $persona->materno='Marin';
        $persona->nacimiento='1977-09-13';
        $persona->telefono='9711652890';
        $persona->rfc='GUME770913MOCZRV06';
        $persona->sexo='Femenino';
		$persona->save();

		$persona=new Persona();
        $persona->nombre='Luis Enrique';
        $persona->paterno='Villalobos';
        $persona->materno='Melendez';
        $persona->nacimiento='1995-04-24';
        $persona->telefono='9612982039';
        $persona->rfc='VIML950424HOCLLS01';
        $persona->sexo='Masculino';
		$persona->save();

		$persona=new Persona();
        $persona->nombre='Juana';
        $persona->paterno='Lopez';
        $persona->materno='Mora';
        $persona->nacimiento='1967-08-08';
        $persona->telefono='9711028396';
        $persona->rfc='LOMJ670808MOCPRN06';
        $persona->sexo='Femenino';
		$persona->save();

		$persona=new Persona();
        $persona->nombre='Bernardino';
        $persona->paterno='Orozco';
        $persona->materno='Manzano';
        $persona->nacimiento='1964-11-22';
        $persona->telefono='971927305';
        $persona->rfc='OOVB640922HOCSRR02';
        $persona->sexo='Masculino';
		$persona->save();

		$persona=new Persona();
        $persona->nombre='MARIA EUGENIA';
        $persona->paterno='OSORIO';
        $persona->materno='GUZMAN';
        $persona->nacimiento='1997-10-27';
        $persona->telefono='9711725698';
        $persona->rfc='OOGM970127MOCSZR09';
        $persona->sexo='Femenino';
		$persona->save();

		$persona=new Persona();
        $persona->nombre='ESTHER';
        $persona->paterno='LOPEZ';
        $persona->materno='GUTIERREZ';
        $persona->nacimiento='1980-06-24';
        $persona->telefono='9711117293';
        $persona->rfc='LOGE800624MQTPTS03';
        $persona->sexo='Femenino';
		$persona->save();
		
		$persona=new Persona();
        $persona->nombre='ROSARIO CARMEN';
        $persona->paterno='SANCHEZ';
        $persona->materno='ROSAS';
        $persona->nacimiento='1977-03-06';
        $persona->telefono='9711839499';
        $persona->rfc='SARR770306MCSNSS02';
        $persona->sexo='Femenino';
		$persona->save();

		$persona=new Persona();
        $persona->nombre='ABRAM';
        $persona->paterno='MARIN';
        $persona->materno='CID';
        $persona->nacimiento='1987-09-03';
        $persona->telefono='9719270252';
        $persona->rfc='MACA870903HSPRDB04';
        $persona->sexo='Masculino';
		$persona->save();

		$persona=new Persona();
        $persona->nombre='JEAN CARLOS';
        $persona->paterno='CRUZ';
        $persona->materno='RAMIREZ';
        $persona->nacimiento='1986-04-10';
        $persona->telefono='971902745';
        $persona->rfc='CURJ860410HDFRMN04';
        $persona->sexo='Masculino';
		$persona->save();

		$persona=new Persona();
        $persona->nombre='FRIDA';
        $persona->paterno='ALVAREZ';
        $persona->materno='BETANZOS';
        $persona->nacimiento='1989-04-15';
        $persona->telefono='971905647';
        $persona->rfc='AABF890415MHGLTR07';
        $persona->sexo='Femenino';
		$persona->save();

		$persona=new Persona();
        $persona->nombre='FLORENCIA';
        $persona->paterno='ALAVEZ';
        $persona->materno='BERIEL';
        $persona->nacimiento='1980-05-18';
        $persona->telefono='971908008';
        $persona->rfc='AABF780518MJCLRL04';
        $persona->sexo='Femenino';
		$persona->save();

		$persona=new Persona();
        $persona->nombre='EVE';
        $persona->paterno='ANTONIO';
        $persona->materno='JIMENEZ';
        $persona->nacimiento='1982-12-28';
        $persona->telefono='971927142';
        $persona->rfc='AOJE821228HVZNMV02';
        $persona->sexo='Masculino';
		$persona->save();

        $persona=new Persona();
        $persona->nombre='Valeria';
        $persona->paterno='Osorio';
        $persona->materno='Cueto';
        $persona->nacimiento='2001-06-02';
        $persona->telefono='97126142538';
        $persona->rfc='OOGM970127MOCSZR29';
        $persona->sexo='Femenino';
		$persona->save();

    }
}
