<?php

use Illuminate\Database\Seeder;

class ClaritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Clarity')->create(['name' => 'FL']);
        factory('App\Clarity')->create(['name' => 'IF']);
        factory('App\Clarity')->create(['name' => 'VVS']);
        factory('App\Clarity')->create(['name' => 'VS']);
        factory('App\Clarity')->create(['name' => 'SI']);
        factory('App\Clarity')->create(['name' => 'I1']);
        factory('App\Clarity')->create(['name' => 'I2']);
        factory('App\Clarity')->create(['name' => 'I3']);
    }
}
