<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bottle extends Model
{
    protected $fillable = [

        'name',
        'price',
    ];

    public function drinks() {

        return $this -> hasMany(Drink::class);
    }

}
