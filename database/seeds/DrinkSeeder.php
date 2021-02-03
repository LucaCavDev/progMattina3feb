<?php

use Illuminate\Database\Seeder;

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
        factory(Drink::class, 20) -> create();
    }
}
