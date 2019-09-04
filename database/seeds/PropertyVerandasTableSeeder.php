<?php

use Illuminate\Database\Seeder;

class PropertyVerandasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_views')->insert([
          'title' => 'Covered Veranda',
          'slug' => 'covered-veranda',
      ]);
      DB::table('property_views')->insert([
          'title' => 'Uncovered Veranda',
          'slug' => 'uncovered-veranda',
      ]);
      DB::table('property_views')->insert([
          'title' => 'Wide Veranda',
          'slug' => 'wide-veranda',
      ]);
      DB::table('property_views')->insert([
          'title' => 'Small Veranda',
          'slug' => 'small-veranda',
      ]);
      DB::table('property_views')->insert([
          'title' => 'Around Veranda',
          'slug' => 'around-veranda',
      ]);
      DB::table('property_views')->insert([
          'title' => 'Pool View Veranda',
          'slug' => 'pool-view-veranda',
      ]);
      DB::table('property_views')->insert([
          'title' => 'Sea View Veranda',
          'slug' => 'sea-view-veranda',
      ]);
      DB::table('property_views')->insert([
          'title' => 'Overlooking Sea',
          'slug' => 'overlooking-sea',
      ]);
      DB::table('property_views')->insert([
          'title' => 'Tangent Green Space',
          'slug' => 'tangent-green-space',
      ]);
    }
}
