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
        factory('App\Shape')->create(['name' => 'Pear']);
        factory('App\Shape')->create(['name' => 'Oval']);
        factory('App\Shape')->create(['name' => 'Marquise']);
        factory('App\Shape')->create(['name' => 'Cushion']);
        factory('App\Shape')->create(['name' => 'Heart']);
        factory('App\Shape')->create(['name' => 'Princess']);
        factory('App\Shape')->create(['name' => 'Emerald']);
        factory('App\Shape')->create(['name' => 'Ascher']);
        factory('App\Shape')->create(['name' => 'Radiant']);
        factory('App\Shape')->create(['name' => 'Bagguttes']);
        factory('App\Shape')->create(['name' => 'Rose Cut']);
        factory('App\Shape')->create(['name' => 'Oldmine']);
        factory('App\Shape')->create(['name' => 'Briolettes']);
        factory('App\Shape')->create(['name' => 'Tapered']);
        factory('App\Shape')->create(['name' => 'Triangular']);
        factory('App\Shape')->create(['name' => 'Other']);
    }
}
