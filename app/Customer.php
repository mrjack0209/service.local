<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    protected $fillable = [
        'name', 'phone',
    ];

    public static function add($fields)
    {
        $customer = new Customer();
        if (!$customer->ExistsCustomer($fields['phone'])){
            $customer->fill($fields);
            $customer->save();
            return $customer->id;
        }else{
            $user_id = $customer->ExistsCustomer($fields['phone']);
            return $user_id;
        }
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function renove()
    {
        $this->delete();
    }


    public function ExistsCustomer($phone){
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
