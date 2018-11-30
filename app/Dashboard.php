<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    public static function totalCustomer()
    {
        return Customer::count();
    }

    public static function totalOrders()
    {
        return Order::count();
    }
}
