<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Status::insert(['name' => 'В работе']);
        \App\Status::insert(['name' => 'Готов']);
        \App\Status::insert(['name' => 'Ожидает деталь']);
        \App\Status::insert(['name' => 'Передан в другой СЦ']);
        \App\Status::insert(['name' => 'Ремонтопригоден']);
    }
}
