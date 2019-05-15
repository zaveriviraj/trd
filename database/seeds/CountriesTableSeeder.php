<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Country')->create(['name' => 'India']);
        factory('App\Country')->create(['name' => 'Israel']);
    }
}
