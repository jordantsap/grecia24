<?php

use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            'name' => 'Package 1',
            'credits' => '10',
            'price' => '40',
        ]);
        DB::table('packages')->insert([
            'name' => 'Package 2',
            'credits' => '20',
            'price' => '60',
        ]);
        DB::table('packages')->insert([
            'name' => 'Package 3',
            'credits' => '50',
            'price' => '80',
        ]);
        DB::table('packages')->insert([
            'name' => 'Package 4',
            'credits' => '10000',
            'price' => '100',
        ]);
        DB::table('packages')->insert([
            'name' => 'Package 5',
            'period' => '2 Years',
            'credits' => '10000',
            'price' =>'180',
        ]);
        DB::table('packages')->insert([
            'name' => 'Package 6',
            'period' => '3 Years',
            'credits' => '10000',
            'price' =>'250',
        ]);
        DB::table('packages')->insert([
            'name' => 'Package 7',
            'period' => '5 Years',
            'credits' => '10000',
            'price' =>'500',
        ]);
        DB::table('packages')->insert([
            'name' => 'Package 8',
            'credits' => '1',
            'price' =>'15',
            
        ]);
    }
}
