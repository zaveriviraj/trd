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
        factory('App\Cut')->create(['abbr' => 'EX', 'name' => 'Excellent']);
        factory('App\Cut')->create(['abbr' => 'VG', 'name' => 'Very Good']);
        factory('App\Cut')->create(['abbr' => 'GD', 'name' => 'Good']);
        factory('App\Cut')->create(['abbr' => 'FR', 'name' => 'Fair']);
        factory('App\Cut')->create(['abbr' => 'PR', 'name' => 'Poor']);
    }
}
