<?php

use Illuminate\Database\Seeder;

class CleanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Esto sirve para checar y agarrrar todas las tablas y las borra
        DB::statement("SET foreign_key_checks=0");
		$databaseName = DB::getDatabaseName();
		$tables = DB::select("SELECT * FROM information_schema.tables WHERE table_schema = '$databaseName'");
		foreach ($tables as $table) {
		    $name = $table->TABLE_NAME;
		    //if you don't want to truncate migrations
		    if ($name == 'migrations') {
		        continue;
		    }
		    DB::table($name)->truncate();
		}
		DB::statement("SET foreign_key_checks=1");
    }
}
