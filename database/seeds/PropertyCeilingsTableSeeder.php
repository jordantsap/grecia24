<?php

use Illuminate\Database\Seeder;

class PropertyCeilingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_ceilings')->insert([
          'title' => 'Wooden',
          'slug' => 'wooden',
      ]);
      DB::table('property_ceilings')->insert([
          'title' => 'Plastic',
          'slug' => 'plastic',
      ]);
      DB::table('property_ceilings')->insert([
          'title' => 'Gypsum Boards',
          'slug' => 'gypsum-boards',
      ]);
      DB::table('property_ceilings')->insert([
          'title' => 'Gypsum Boards with Hidden Lighting',
          'slug' => 'gypsum-boards-with-hidden-lighting',
      ]);
    }
}
