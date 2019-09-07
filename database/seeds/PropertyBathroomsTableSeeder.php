<?php

use Illuminate\Database\Seeder;

class PropertyBathroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_bathrooms')->insert([
          'title' => 'Bathtub',
          'slug' => 'bathtub',
      ]);
      DB::table('property_bathrooms')->insert([
          'title' => 'Shower',
          'slug' => 'Shower',
      ]);
      DB::table('property_bathrooms')->insert([
          'title' => 'Bathtub Shower',
          'slug' => 'bathtub-shower',
      ]);
      DB::table('property_bathrooms')->insert([
          'title' => 'Hydromassage Shower',
          'slug' => 'hydromassage-shower',
      ]);
      DB::table('property_bathrooms')->insert([
          'title' => 'Hydromassage Bathtub',
          'slug' => 'hydromassage-bathtub',
      ]);
    }
}
