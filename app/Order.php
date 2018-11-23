<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $fillable = [
        'device_name', 'device_id', 'category_id', 'user_id', 'status_id', 'price', 'description',
    ];

    public function GetCustomerName($customer_id)
    {
        return Customer::find($customer_id)->getName();
    }

    public function GetCustomerPhone($customer_id)
    {
        return Customer::find($customer_id)->getPhone();
    }
}
