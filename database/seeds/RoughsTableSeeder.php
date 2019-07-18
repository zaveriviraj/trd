<?php

use Illuminate\Database\Seeder;

class RoughsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Rough')->create(['short_name' => 'EX', 'name' => 'Excellent']);
        factory('App\Rough')->create(['short_name' => 'VG', 'name' => 'Very Good']);
        factory('App\Rough')->create(['short_name' => 'GD', 'name' => 'Good']);
        factory('App\Rough')->create(['short_name' => 'FR', 'name' => 'Fair']);
        factory('App\Rough')->create(['short_name' => 'PR', 'name' => 'Poor']);
    }
}
