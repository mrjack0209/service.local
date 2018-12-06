<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Order extends Model
{
    protected $fillable = [
        'device_name', 'device_id', 'category_id', 'user_id', 'status_id', 'price', 'description',
    ];

    public static function add($fields)
    {
        $fields['user_id'] = Customer::add($fields);
        $order = static::create($fields);
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

    public function scopeStatus($query, $phone)
    {
        return DB::table('orders')
            ->join('customers', 'orders.user_id', '=', 'customers.id')
            ->join('statuses', 'status_id', '=', 'statuses.id')
            ->select('orders.device_name', 'orders.device_id', 'statuses.name', 'orders.created_at')
            ->where('customers.phone', $phone)
            ->first();
    }
}
