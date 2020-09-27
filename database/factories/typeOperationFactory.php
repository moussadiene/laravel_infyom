<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\typeOperation;
use Faker\Generator as Faker;

$factory->define(typeOperation::class, function (Faker $faker) {

    return [
        'libelle' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
