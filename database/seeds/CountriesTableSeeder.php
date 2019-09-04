<?php

use Illuminate\Database\Seeder;
use App\Models\Country;
class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Country::create([
          'title'           => 'Greece',
          'slug'          => Str::slug('greece'),
      ]);
      Country::create([
          'title'           => 'Cyprus',
          'slug'          => Str::slug('cyprus'),
      ]);
      Country::create([
          'title'           => 'Bulgaria',
          'slug'          => Str::slug('bulgaria'),
      ]);
    }
}
