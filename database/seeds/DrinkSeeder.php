<?php

use Illuminate\Database\Seeder;

use App\Bottle;
use App\Drink;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Drink::class, 50) 
            -> make()
            -> each(function($drink) {

            //$bottle = Bottle::findOrFail(1);
            $bottle = Bottle::inRandomOrder() -> first();
            $drink -> bottle() -> associate($bottle);
            $drink -> save();
        });
    }
}
