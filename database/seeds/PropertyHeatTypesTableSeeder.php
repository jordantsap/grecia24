<?php

use Illuminate\Database\Seeder;

class PropertyHeatTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_heat_types')->insert([
          'title' => 'Autonomous Heating',
          'slug' => 'autonomous-heating',
      ]);
      DB::table('property_heat_types')->insert([
          'title' => 'Central Heating',
          'slug' => 'central-heating',
      ]);
      DB::table('property_heat_types')->insert([
          'title' => 'No Heating',
          'slug' => 'no-heating',
      ]);
      DB::table('property_heat_types')->insert([
          'title' => 'Autonomous Radiators Heating',
          'slug' => 'autonomous-radiators-heating',
      ]);
      DB::table('property_heat_types')->insert([
          'title' => 'Natural Gas',
          'slug' => 'natural-gas',
      ]);
      DB::table('property_heat_types')->insert([
          'title' => 'Petrol',
          'slug' => 'petrol',
      ]);
    }
}
