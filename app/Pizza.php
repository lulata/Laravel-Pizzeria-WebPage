<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //protected $table = "some_naem"

    protected $casts = [
        'toppings'=> 'array'
    ];
}
