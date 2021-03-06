<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = [

        'name',
        'alchool_perc',
        'price',
    ];

    public function bottle() {

        return $this -> belongsTo(Bottle::class);
    }

}
