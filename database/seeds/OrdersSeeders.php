<?php

use Illuminate\Database\Seeder;

class OrdersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Order::class, 30)->create();
    }
}
