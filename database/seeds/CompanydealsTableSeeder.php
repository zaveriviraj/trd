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
        factory('App\Companydeal')->create(['name' => 'Melee']);
        factory('App\Companydeal')->create(['name' => 'Pointers']);
        factory('App\Companydeal')->create(['name' => 'Dossiers']);
        factory('App\Companydeal')->create(['name' => 'Carat Plus']);
        factory('App\Companydeal')->create(['name' => 'Large Stones']);
        factory('App\Companydeal')->create(['name' => 'Fancy Color']);
        factory('App\Companydeal')->create(['name' => 'Gem Stones']);
        factory('App\Companydeal')->create(['name' => 'Jewelry']);
        factory('App\Companydeal')->create(['name' => 'Trader']);
        factory('App\Companydeal')->create(['name' => 'Lab Grown']);
    }
}
