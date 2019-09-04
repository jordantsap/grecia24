<?php

use Illuminate\Database\Seeder;

class PropertyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_types')->insert([
          'title' => 'Neoclassical',
          'slug' => 'neoclassical',
      ]);
      DB::table('property_types')->insert([
          'title' => 'Solved',
          'slug' => 'solved',
      ]);
      DB::table('property_types')->insert([
          'title' => 'Maintain',
          'slug' => 'maintain',
      ]);
      DB::table('property_types')->insert([
          'title' => 'Prefabrication',
          'slug' => 'prefabrication',
      ]);
      DB::table('property_types')->insert([
          'title' => 'Loft',
          'slug' => 'loft',
      ]);
      DB::table('property_types')->insert([
          'title' => 'Newly Built',
          'slug' => 'newly-built',
      ]);
      DB::table('property_types')->insert([
        'title' => 'Traditional',
        'slug' => 'traditional',
      ]);
      DB::table('property_types')->insert([
          'title' => 'Stone Build',
          'slug' => 'stone-build',
      ]);
    }
}
