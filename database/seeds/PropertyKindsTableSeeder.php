<?php

use Illuminate\Database\Seeder;

class PropertyKindsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_kinds')->insert([
          'title' => 'Villa',
          'slug' => 'villa',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Floor-Penthouse Apartment',
          'slug' => 'floor-penthouse-apartment',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Studio',
          'slug' => 'studio',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Office',
          'slug' => 'office',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Hotel',
          'slug' => 'hotel',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Parcel',
          'slug' => 'parcel',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Detached house',
          'slug' => 'detached-house',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Flat Apartment',
          'slug' => 'flat-apartment',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Professional Place',
          'slug' => 'professional-place',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Warehouse',
          'slug' => 'warehouse',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Rentals',
          'slug' => 'rentals',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Island',
          'slug' => 'island',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Maisonette',
          'slug' => 'maisonette',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Flatlet',
          'slug' => 'flatlet',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Store',
          'slug' => 'store',
      ]);
      DB::table('property_kinds')->insert([
        'title' => 'Garage-Parking',
        'slug' => 'garage-parking',
      ]);
      DB::table('property_kinds')->insert([
          'title' => 'Plot',
          'slug' => 'plot',
      ]);
    }
}
