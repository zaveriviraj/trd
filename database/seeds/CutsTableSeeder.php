<?php

use Illuminate\Database\Seeder;

class CutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Cut')->create(['name' => 'XXX']);
        factory('App\Cut')->create(['name' => 'XVGVG']);
    }
}
