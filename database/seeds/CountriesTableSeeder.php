<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $sql = database_path('seeds/countries.sql');
      DB::unprepared(File::get($sql));
    }
}
