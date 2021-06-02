<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'team1' => $faker -> , 
        'team2' => $faker -> ,
        'point1' => $faker -> ,
        'point2' => $faker -> ,
        'result' => $faker -> ,
    ];
});
