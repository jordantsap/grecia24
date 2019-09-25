<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
	// DB::unprepared(file_get_contents('states.sql'));
	$sql = file_get_contents(database_path() . '/seeds/states.sql');

  DB::unprepared($sql);
}
}
