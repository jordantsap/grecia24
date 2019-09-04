<?php

use Illuminate\Database\Seeder;

class PropertyAmmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_ammenities')->insert([
          'title' => 'Clima',
          'slug' => 'clima',
      ]);
      DB::table('property_ammenities')->insert([
          'title' => 'Pool',
          'slug' => 'pool',
      ]);
      DB::table('property_ammenities')->insert([
          'title' => 'Alarm',
          'slug' => 'alarm',
      ]);
      DB::table('property_ammenities')->insert([
          'title' => 'Parking',
          'slug' => 'parking',
      ]);
      DB::table('property_ammenities')->insert([
          'title' => 'Balconi',
          'slug' => 'balconi',
      ]);
      DB::table('property_ammenities')->insert([
          'title' => 'Semi-Countryside',
          'slug' => 'semi-countryside',
      ]);
      DB::table('property_ammenities')->insert([
          'title' => 'Furnished',
          'slug' => 'furnished',
      ]);
      DB::table('property_ammenities')->insert([
          'title' => 'Garden',
          'slug' => 'garden',
      ]);
    }
}
