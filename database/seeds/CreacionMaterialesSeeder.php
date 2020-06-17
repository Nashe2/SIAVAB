<?php

use Illuminate\Database\Seeder;
use App\Material;
use App\Persona;
use App\Artesano;
use App\CreacionMaterial;
use App\UsoMaterial;

use Illuminate\Database\Eloquent\Builder;


class CreacionMaterialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    	$rfc = 'OOVB640922HOCSRR02';
		$artesano = DB::table('artesanos')
					->leftJoin('personas', 'personas.id', '=', 'artesanos.persona_id')
					->where('personas.rfc', $rfc)
					->first();

    	$creacionMaterial = new CreacionMaterial();
    	$creacionMaterial->fecha = now();
    	$creacionMaterial->artesano_id = $artesano->artesano_id;
    	$creacionMaterial->save();

        $materialId = 1;
        $increment = 7;
        $creacionMaterial->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->decrement('cantidad', $increment);

        $materialId = 4;
        $increment = 1;
        $creacionMaterial->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->decrement('cantidad', $increment);

        $materialId = 7;
        $increment = 1;
        $creacionMaterial->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->decrement('cantidad', $increment);

        $materialId = 8;
        $increment = 1;
        $creacionMaterial->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->decrement('cantidad', $increment);

        $rfc = 'LOGE800624MQTPTS03';
        $artesano = DB::table('artesanos')
                    ->leftJoin('personas', 'personas.id', '=', 'artesanos.persona_id')
                    ->where('personas.rfc', $rfc)
                    ->first();

        $creacionMaterial = new CreacionMaterial();
        $creacionMaterial->fecha = now();
        $creacionMaterial->artesano_id = $artesano->artesano_id;
        $creacionMaterial->save();

        $materialId = 2;
        $increment = 16;
        $creacionMaterial->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->decrement('cantidad', $increment);

        $materialId = 9;
        $increment = 11;
        $creacionMaterial->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->decrement('cantidad', $increment);

        $materialId = 4;
        $increment = 1;
        $creacionMaterial->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->decrement('cantidad', $increment);

        $materialId = 7;
        $increment = 1;
        $creacionMaterial->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->decrement('cantidad', $increment);

        $materialId = 8;
        $increment = 1;
        $creacionMaterial->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->decrement('cantidad', $increment);

        $rfc = 'AABF780518MJCLRL04';
        $artesano = DB::table('artesanos')
                    ->leftJoin('personas', 'personas.id', '=', 'artesanos.persona_id')
                    ->where('personas.rfc', $rfc)
                    ->first();

        $creacionMaterial = new CreacionMaterial();
        $creacionMaterial->fecha = now();
        $creacionMaterial->artesano_id = $artesano->artesano_id;
        $creacionMaterial->save();

        $materialId = 10;
        $increment = 23;
        $creacionMaterial->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->decrement('cantidad', $increment);

        $materialId = 13;
        $increment = 2;
        $creacionMaterial->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->decrement('cantidad', $increment);

        $materialId = 4;
        $increment = 1;
        $creacionMaterial->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->decrement('cantidad', $increment);

        $materialId = 7;
        $increment = 1;
        $creacionMaterial->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->decrement('cantidad', $increment);

        $materialId = 8;
        $increment = 1;
        $creacionMaterial->materials()->attach($materialId, ['cantidad' => $increment]);
        Material::find($materialId)->decrement('cantidad', $increment);
    }
}
