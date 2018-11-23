<?php

use Faker\Generator as Faker;
use App\Customer;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'phone' => $faker->phoneNumber,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
