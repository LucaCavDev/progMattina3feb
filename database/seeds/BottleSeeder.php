<?php

use Illuminate\Database\Seeder;

use App\Bottle;

class BottleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bottle::class, 50) -> create();
    }
}
