<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    const STORE_RULES = [
        'brand' => 'required | min:2',
        'model' => 'required | min:2',
        'year' => 'required',
        'maxSpeed' => 'between:20,300',
        'isAutomatic' => 'required',
        'engine' => 'required',
        'numberOfDoors' => 'required | between:2,5'
    ];
}
