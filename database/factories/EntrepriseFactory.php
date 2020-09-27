<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Entreprise;
use Faker\Generator as Faker;

$factory->define(Entreprise::class, function (Faker $faker) {

    return [
        'nom' => $faker->word,
        'ninea' => $faker->word,
        'telephone' => $faker->word,
        'adresse' => $faker->word,
        'budget' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
