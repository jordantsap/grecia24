<?php

use Illuminate\Database\Seeder;

class PropertyOrientationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_kinds')->insert([
          'title' => 'Airy',
          'slug' => 'airy',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Corner',
          'slug' => 'corner',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Inner',
          'slug' => 'inner',
      ]);
    }
}
