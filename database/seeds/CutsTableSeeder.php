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
        factory('App\Cut')->create(['name' => 'Ideal']);
        factory('App\Cut')->create(['name' => 'EX']);
        factory('App\Cut')->create(['name' => 'VG']);
        factory('App\Cut')->create(['name' => 'GD']);
    }
}
