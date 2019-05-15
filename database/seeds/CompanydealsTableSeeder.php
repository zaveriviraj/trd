<?php

use Illuminate\Database\Seeder;

class CompanydealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Companydeal')->create(['name' => 'Rough']);
        factory('App\Companydeal')->create(['name' => 'Polished']);
        factory('App\Companydeal')->create(['name' => 'Jewelry']);
    }
}
