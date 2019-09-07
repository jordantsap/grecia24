<?php

use Illuminate\Database\Seeder;

class PropertyInnerstairsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_innerstairs')->insert([
          'title' => 'Wooden',
          'slug' => 'wooden',
      ]);
      DB::table('property_innerstairs')->insert([
          'title' => 'Iron',
          'slug' => 'iron',
      ]);
      DB::table('property_innerstairs')->insert([
          'title' => 'Aluminum',
          'slug' => 'aluminum',
      ]);
      DB::table('property_innerstairs')->insert([
          'title' => 'Built',
          'slug' => 'built',
      ]);
      DB::table('property_innerstairs')->insert([
          'title' => 'Circular',
          'slug' => 'circular',
      ]);
      DB::table('property_innerstairs')->insert([
          'title' => 'Hanging',
          'slug' => 'hanging',
      ]);
      DB::table('property_innerstairs')->insert([
          'title' => 'Corner',
          'slug' => 'corner',
      ]);
      DB::table('property_innerstairs')->insert([
          'title' => 'Gunwale',
          'slug' => 'gunwale',
      ]);
    }
}
