<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Image::class, function (Faker $faker) {
    $imageable = [
        App\Models\Destination::class,
        // App\Complex::class,
    ]; // Add new imageables here as we make them
    $imageableType = $imageable;
    $imageable = factory($imageableType)->create();

    return [
        'imageable_type' => $imageableType,
        'imageable_id' => '1',
    ];
});
