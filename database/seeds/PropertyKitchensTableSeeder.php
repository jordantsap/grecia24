<?php

use Illuminate\Database\Seeder;

class PropertyKitchensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_kitchens')->insert([
          'title' => 'Fully Device Equiped',
          'slug' => 'fully-device-equiped',
      ]);
      DB::table('property_kitchens')->insert([
          'title' => 'Glass Kitchen',
          'slug' => 'glass-kitchen',
      ]);
      DB::table('property_kitchens')->insert([
          'title' => 'Big Separate Kitchen',
          'slug' => 'big-separate-kitchen',
      ]);
      DB::table('property_kitchens')->insert([
          'title' => 'Buildin Electric Devices',
          'slug' => 'buildin-electric-devices',
      ]);
    }
}
