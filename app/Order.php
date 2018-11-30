<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $fillable = [
        'device_name', 'device_id', 'category_id', 'user_id', 'status_id', 'price', 'description',
    ];

    public static function add($fields)
    {
        $order = new static;
        $order->fill($fields);
        $order->user_id = Customer::add($fields);
        $order->save();
        return $order;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function GetCustomerName($customer_id)
    {
        return Customer::find($customer_id)->getName();
    }

    public function GetCustomerPhone($customer_id)
    {
        return Customer::find($customer_id)->getPhone();
    }
}
