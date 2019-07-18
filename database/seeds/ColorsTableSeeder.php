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
        factory('App\Color')->create(['name' => 'O']);
        factory('App\Color')->create(['name' => 'P']);
        factory('App\Color')->create(['name' => 'Q']);
        factory('App\Color')->create(['name' => 'R']);
        factory('App\Color')->create(['name' => 'S']);
        factory('App\Color')->create(['name' => 'T']);
        factory('App\Color')->create(['name' => 'U']);
        factory('App\Color')->create(['name' => 'V']);
        factory('App\Color')->create(['name' => 'W']);
        factory('App\Color')->create(['name' => 'X']);
        factory('App\Color')->create(['name' => 'Y']);
        factory('App\Color')->create(['name' => 'Z']);
        factory('App\Color')->create(['name' => 'Fancy Color']);
        factory('App\Color')->create(['name' => 'Brown']);
        // factory('App\Color')->create(['name' => 'TTLB']);
        // factory('App\Color')->create(['name' => 'TLB']);
        // factory('App\Color')->create(['name' => 'TTLC']);
        // factory('App\Color')->create(['name' => 'TLC']);
        // factory('App\Color')->create(['name' => 'Dark']);
    }
}
