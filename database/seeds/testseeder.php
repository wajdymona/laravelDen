<?php

use Illuminate\Database\Seeder;

class testseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\test::class,10)->create();
    }
}
