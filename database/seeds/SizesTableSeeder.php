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
        factory('App\Size')->create(['name' => 'Stars, Melee to 0.30ct.']);
        factory('App\Size')->create(['name' => '0.30 to 2ct.']);
        factory('App\Size')->create(['name' => '2 to 5ct.']);
        factory('App\Size')->create(['name' => '5ct. & above']);
    }
}
