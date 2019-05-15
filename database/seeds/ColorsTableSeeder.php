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
        factory('App\Color')->create(['name' => 'D']);
        factory('App\Color')->create(['name' => 'E']);
        factory('App\Color')->create(['name' => 'F']);
        factory('App\Color')->create(['name' => 'G']);
        factory('App\Color')->create(['name' => 'H']);
        factory('App\Color')->create(['name' => 'I']);
        factory('App\Color')->create(['name' => 'J']);
        factory('App\Color')->create(['name' => 'K']);
        factory('App\Color')->create(['name' => 'L']);
        factory('App\Color')->create(['name' => 'M']);
        factory('App\Color')->create(['name' => 'N']);
        factory('App\Color')->create(['name' => 'Dark']);
        factory('App\Color')->create(['name' => 'TTLB']);
        factory('App\Color')->create(['name' => 'TLB']);
        factory('App\Color')->create(['name' => 'TTLC']);
        factory('App\Color')->create(['name' => 'TLC']);
        factory('App\Color')->create(['name' => 'FC']);
    }
}
