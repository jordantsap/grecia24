<?php

use Illuminate\Database\Seeder;

class PropertyRoofgardensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_roofgardens')->insert([
          'title' => 'Big Roofgarden',
          'slug' => 'big-roofgarden',
      ]);
      DB::table('property_roofgardens')->insert([
          'title' => 'small-roofgarden',
          'slug' => 'small-roofgarden',
      ]);

    }
}
