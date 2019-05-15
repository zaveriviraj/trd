<?php

use Illuminate\Database\Seeder;

class ShapesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Shape')->create(['name' => 'Round']);
        factory('App\Shape')->create(['name' => 'Curves']);
        factory('App\Shape')->create(['name' => 'Squares']);
        factory('App\Shape')->create(['name' => 'Baguettes']);
        factory('App\Shape')->create(['name' => 'Pie']);
        factory('App\Shape')->create(['name' => 'Specials']);
    }
}
