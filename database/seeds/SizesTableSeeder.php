<?php

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Size')->create(['name' => 'Stars']);
        factory('App\Size')->create(['name' => 'Melee']);
        factory('App\Size')->create(['name' => 'Carats']);
        factory('App\Size')->create(['name' => 'Large']);
        factory('App\Size')->create(['name' => 'Specials']);
    }
}
