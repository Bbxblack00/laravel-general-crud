<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'team1' => $faker -> word, 
        'team2' => $faker -> word,
        'point1' => $faker -> numberBetween($min = 0, $max = 20),
        'point2' => $faker -> numberBetween($min = 0, $max = 20),
        'result' => $faker -> numberBetween($min = 0, $max = 1)? 'ha vinto la prima squadra' : 'ha vinto la seconda squadra',
    ];
});
