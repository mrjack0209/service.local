<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::insert(['name' => 'Мобильный телефон']);
        \App\Category::insert(['name' => 'Смартфон']);
        \App\Category::insert(['name' => 'Планшет']);
        \App\Category::insert(['name' => 'Ноутбук']);
        \App\Category::insert(['name' => 'ПК']);
        \App\Category::insert(['name' => 'Игровая консоль']);
        \App\Category::insert(['name' => 'Прочее']);
    }
}
