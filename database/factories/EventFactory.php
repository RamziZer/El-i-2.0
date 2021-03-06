<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use App\User;
use App\Theme;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'date' => Carbon::now(),
        'late' => $faker->randomDigit,
        'long' => $faker->randomDigit,
        'theme' => $faker->word,
        'effectif_max' => $faker->randomDigit,
        'effectif_min' => $faker->randomDigit,
        'descriptif' => $faker->text,
        'user_id' => User::all()->random()->id,
        'theme_id' => Theme::all()->random()->id,
        'num_rue' => $faker->randomDigit,
        'nom_rue' => $faker->text,
        'ville' => $faker->word,
        'codepostal' => $faker ->randomDigit,
        'complement' => $faker ->word
    ];
});
