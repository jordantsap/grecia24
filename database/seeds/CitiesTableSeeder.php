<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * the cities is large, we need to break it in parts
     * @return void
     */
    public function run()
    {
        // DB::unprepared(File::get('cities.sql'));
        $sql = file_get_contents(database_path() . '/seeds/cities.sql');
        DB::unprepared($sql);

    }
}
