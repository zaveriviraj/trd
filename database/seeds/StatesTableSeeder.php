<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\State')->create(['name' => 'Gujarat', 'country_id' => 1]);
        factory('App\State')->create(['name' => 'Maharashtra', 'country_id' => 1]);
    }
}
