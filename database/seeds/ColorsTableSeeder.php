<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Color')->create(['name' => 'D-F']);
        factory('App\Color')->create(['name' => 'G-H']);
        factory('App\Color')->create(['name' => 'I-K']);
        factory('App\Color')->create(['name' => 'L-N']);
        factory('App\Color')->create(['name' => 'O-Z']);
        // factory('App\Color')->create(['name' => 'FC']);
        // factory('App\Color')->create(['name' => 'TTLB']);
        // factory('App\Color')->create(['name' => 'TLB']);
        // factory('App\Color')->create(['name' => 'TTLC']);
        // factory('App\Color')->create(['name' => 'TLC']);
        // factory('App\Color')->create(['name' => 'Dark']);
    }
}
