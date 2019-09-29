<?php

use Illuminate\Database\Seeder;

class AdvertTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('advert_types')->insert([
            'title'           => 'Villa',
            'slug'          => Str::slug('villa', '-'),
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Home',
            'slug'          => Str::slug('Home', '-'),
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Maisonette',
            'slug'          => Str::slug('Maisonette', '-'),
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Apartment/Penthouse',
            'slug'          => 'apartment-penthouse',
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Apartment',
            'slug'          => 'apartment',
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Bedsit',
            'slug'          => Str::slug('Bedsit', '-'),
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Studio',
            'slug'          => Str::slug('Studio', '-'),
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Business area',
            'slug'          => Str::slug('Business area', '-'),
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Shop',
            'slug'          => Str::slug('Shop', '-'),
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Office',
            'slug'          => 'Office',
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Warehouse',
            'slug'          => 'Warehouse',
        ]);
         DB::table('advert_types')->insert([
          'title'           => 'Garage/parking',
          'slug'          => Str::slug('Garage/parking', '-'),
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Hotel',
            'slug'          => Str::slug('Hotel', '-'),
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Rented Rooms',
            'slug'          => Str::slug('Rented Rooms', '-'),
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Plot',
            'slug'          => Str::slug('plot', '-'),
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Parcel',
            'slug'          => Str::slug('Parcel', '-'),
        ]);
         DB::table('advert_types')->insert([
            'title'           => 'Island',
            'slug'          => 'island',
        ]);
    }
}
