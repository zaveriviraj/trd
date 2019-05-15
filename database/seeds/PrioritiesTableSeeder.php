<?php

use Illuminate\Database\Seeder;

class PrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Priority')->create(['name' => 'High']);
        factory('App\Priority')->create(['name' => 'Medium']);
        factory('App\Priority')->create(['name' => 'Low']);
    }
}
