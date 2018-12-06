<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grocery extends Model
{
    protected $table = 'groceries';
    protected $fillable = ['name', 'type', 'price'];


}
