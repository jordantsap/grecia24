<?php

use Illuminate\Database\Seeder;

class PropertyPoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('property_pools')->insert([
          'title' => 'Gownups Pool',
          'slug' => 'Grownups-pool',
      ]);
      DB::table('property_pools')->insert([
          'title' => 'Child Pool',
          'slug' => 'child-pool',
      ]);
      DB::table('property_pools')->insert([
          'title' => 'Allaged Pool',
          'slug' => 'allaged-pool',
      ]);
      DB::table('property_pools')->insert([
          'title' => 'Personal Pool',
          'slug' => 'personal-pool',
      ]);
      DB::table('property_pools')->insert([
          'title' => 'Public Pool',
          'slug' => 'public-pool',
      ]);
      DB::table('property_pools')->insert([
          'title' => 'Water Storage Purification System',
          'slug' => 'water-storage-purification-system',
      ]);
    }
}
