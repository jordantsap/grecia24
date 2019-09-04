<?php

use Illuminate\Database\Seeder;

class PropertyIntervalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_intervals')->insert([
          'title' => 'Painted',
          'slug' => 'painted',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Great Decoration',
          'slug' => 'great-decoration',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Complete Electronic Equipment',
          'slug' => 'complete-electronic-equipment',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Autonomy',
          'slug' => 'autonomy',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Floor Heating',
          'slug' => 'floor-heating',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Ceiling Lamps',
          'slug' => 'ceiling-amps',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Comfortable-Operating Space',
          'slug' => 'comfortable-operating-space',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Wall Art',
          'slug' => 'wall-art',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Contemporary architectural design',
          'slug' => 'contemporary-architectural-design',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Electric Equipment Installation',
          'slug' => 'electric-equipment-installation',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Ceiling Air Conditioner',
          'slug' => 'ceiling-air-conditioner',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Recently Renovated',
          'slug' => 'recently-renovated',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Fully Furnitured',
          'slug' => 'fully-furnitured',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Harmonious Arrangement of Spaces',
          'slug' => 'harmonious-arrangement-of-spaces',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Satellite Antenna',
          'slug' => 'satellite-antenna',
      ]);
      DB::table('property_intervals')->insert([
          'title' => 'Spot Lights',
          'slug' => 'spot-lights',
      ]);
    }
}
