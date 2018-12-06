<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Customer extends Model
{
    protected $fillable = [
        'username', 'phone',
    ];

    public static function add($fields)
    {
        if (!$customer = static::where('phone', $fields['phone'])->exists()) {
            return static::create($fields)->id;
        }

        return static::where('phone', $fields['phone'])->first()->id;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove()
    {
        $this->delete();
    }


    public function getPhone(){
        return $this->phone;
    }

    public function getName(){
        return $this->name;
    }

}
