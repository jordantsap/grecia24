<?php

use Illuminate\Database\Seeder;

class PropertyLivingroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_livingrooms')->insert([
          'title' => 'Fireplace',
          'slug' => 'fireplace',
      ]);
      DB::table('property_livingrooms')->insert([
          'title' => 'Composite Furniture',
          'slug' => 'composite-furniture',
      ]);
      DB::table('property_livingrooms')->insert([
          'title' => 'Leather Couch',
          'slug' => 'leather-couch',
      ]);
      DB::table('property_livingrooms')->insert([
          'title' => 'Spacious Lounge',
          'slug' => 'spacious-lounge',
      ]);
      DB::table('property_livingrooms')->insert([
          'title' => 'Home Audio Systems',
          'slug' => 'home-audio-systems',
      ]);
    }
}
