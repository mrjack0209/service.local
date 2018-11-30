<?php

use Faker\Generator as Faker;
use App\Order;
use App\Customer;
use App\Category;
use App\Status;


$factory->define(Order::class, function (Faker $faker) {
    return [
        'device_name' => $faker->bothify('Device ##??'),
        'device_id' => $faker->uuid(),
        'category_id' => random_int(Category::min('id'), Category::max('id')),
        'user_id' => random_int(Customer::min('id'), Customer::max('id')),
        'status_id' => random_int(Status::min('id'), Status::max('id')),
        'price' => random_int(1000,10000),
        'description' => $faker->paragraph(),
    ];
});
