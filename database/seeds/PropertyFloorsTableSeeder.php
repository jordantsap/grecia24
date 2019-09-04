<?php

use Illuminate\Database\Seeder;

class PropertyFloorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_floors')->insert([
          'title' => 'Tiles',
          'slug' => 'tiles',
      ]);
      DB::table('property_floors')->insert([
          'title' => 'Marbles',
          'slug' => 'marbles',
      ]);
      DB::table('property_floors')->insert([
          'title' => 'Oak',
          'slug' => 'oak',
      ]);
      DB::table('property_floors')->insert([
          'title' => 'Wooden',
          'slug' => 'wooden',
      ]);
      DB::table('property_floors')->insert([
          'title' => 'Parquet',
          'slug' => 'parquet',
      ]);
      DB::table('property_floors')->insert([
          'title' => 'Mosaic',
          'slug' => 'mosaic',
      ]);
    }
}
