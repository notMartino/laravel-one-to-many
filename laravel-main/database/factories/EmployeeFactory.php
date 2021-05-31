<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'firstname' => $faker -> firstname,
        'lastname' => $faker -> firstname,
        'ral' => $faker -> randomFloat( 2, 30000, 150000),
    ];
});
