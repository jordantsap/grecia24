<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Business;
class BusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('businesses')->truncate();
        $business = factory(Business::class, 40)->create();

    }
}
