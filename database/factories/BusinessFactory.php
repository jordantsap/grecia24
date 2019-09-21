<?php

use Faker\Generator as Faker;
use App\Models\Business;
use App\Models\BusinessType;

$factory->define(Business::class, function (Faker $faker) {
  return [
    'business_type_id' => rand(1, 13),//factory(BusinessType::class)->create()->id,
    'title' => $faker->firstName(),
    'slug' => $faker->lastName,
    'logo' => $faker->imageUrl(),
    'image' => $faker->imageUrl(),
     // '13b73edae8443990be1aa8f1a483bc27.jpg' it's a filename without path
    'address' => $faker->phoneNumber,
    'tel' => '43245245525252',
    'fax' => $faker->phoneNumber,
    'url' => '',
    "email" => $faker->safeEmail,
    'description' => $faker->sentence($nbWords = 50, $variableNbWords = true),
    'map' => '45654',
  ];
});
