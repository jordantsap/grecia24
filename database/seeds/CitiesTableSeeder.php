<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $sql = database_path('seeds/cities.sql');
        DB::unprepared(File::get($sql));
    }
}
