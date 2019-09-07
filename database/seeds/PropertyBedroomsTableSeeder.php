<?php

use Illuminate\Database\Seeder;

class PropertyBedroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_bedrooms')->insert([
          'title' => 'Aluminum Mirror Cabinets',
          'slug' => 'aluminum-mirror-cabinets',
      ]);
      DB::table('property_bedrooms')->insert([
          'title' => 'Wardrobe',
          'slug' => 'wardrobe',
      ]);
      DB::table('property_bedrooms')->insert([
          'title' => 'Beds',
          'slug' => 'beds',
      ]);
      DB::table('property_bedrooms')->insert([
          'title' => 'Closet',
          'slug' => 'closet',
      ]);
      DB::table('property_bedrooms')->insert([
          'title' => 'Buildin Closet',
          'slug' => 'buildin-closet',
      ]);
    }
}
