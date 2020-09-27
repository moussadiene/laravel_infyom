<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Compte;
use Faker\Generator as Faker;

$factory->define(Compte::class, function (Faker $faker) {

    return [
        'numero' => $faker->word,
        'rib' => $faker->word,
        'entreprise_id' => $faker->randomDigitNotNull,
        'client_id' => $faker->randomDigitNotNull,
        'type_compte' => $faker->randomDigitNotNull,
        'solde' => $faker->word,
        'agios' => $faker->word,
        'fraisOuverture' => $faker->word,
        'remuneration' => $faker->word,
        'dateD' => $faker->word,
        'dateF' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
