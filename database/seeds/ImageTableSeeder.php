<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

    foreach ((range(1, 40)) as $index) {
        $image = \App\Models\Image::create([
            'file' => $faker->imageUrl($width = 640, $height = 480)
        ]);
    }

    foreach ((range(1, 20)) as $index) {
        DB::table('imageables')->insert(
            [
                // 'tag_id' => rand(1, 20),
                'imageable_id' => '1',
                'imageable_type' => 'App\Models\Destination'
            ]
        );

    }

    foreach ((range(21, 40)) as $index) {
        DB::table('imageables')->insert(
            [
                // 'tag_id' => rand(1, 20),
                'imageable_id' => '18',
                'imageable_type' => 'App\Models\Business'
            ]
        );

    }
    }
}
