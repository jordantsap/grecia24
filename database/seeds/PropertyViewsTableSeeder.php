<?php

use Illuminate\Database\Seeder;

class PropertyViewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_views')->insert([
          'title' => 'Mountain View',
          'slug' => 'mountain-view',
      ]);
      DB::table('property_views')->insert([
          'title' => 'Sea View',
          'slug' => 'sea-view',
      ]);
      DB::table('property_views')->insert([
          'title' => 'Forest View',
          'slug' => 'forest-view',
      ]);
      DB::table('property_views')->insert([
          'title' => 'City View',
          'slug' => 'city-view',
      ]);
      DB::table('property_views')->insert([
          'title' => 'No View',
          'slug' => 'no-view',
      ]);
    }
}
