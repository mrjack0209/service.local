<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    protected $fillable = [
        'name', 'phone',
    ];

    public function NotExistsCustomer($phone){
        $customer = Customer::where('phone', $phone)->first();
        return $customer ? $customer->id : 0;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getName(){
        return $this->name;
    }
}
