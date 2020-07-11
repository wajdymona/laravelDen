<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\test;

$factory->define(test::class, function (Faker $faker) {
    return [
       'name'=>$faker->text(8),
       'last'=>$faker->text(6) 
    ];
});
