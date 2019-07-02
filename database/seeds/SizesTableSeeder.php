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
        factory('App\Size')->create(['name' => '0.18-0.22']);
        factory('App\Size')->create(['name' => '0.23-0.29']);
        factory('App\Size')->create(['name' => '0.30-0.39']);
        factory('App\Size')->create(['name' => '0.40-0.49']);
        factory('App\Size')->create(['name' => '0.50-0.59']);
        factory('App\Size')->create(['name' => '0.60-0.69']);
        factory('App\Size')->create(['name' => '0.70-0.79']);
        factory('App\Size')->create(['name' => '0.80-0.89']);
        factory('App\Size')->create(['name' => '0.90-0.99']);
        factory('App\Size')->create(['name' => '1.00-1.99']);
        factory('App\Size')->create(['name' => '2.00-2.99']);
        factory('App\Size')->create(['name' => '3.00-3.99']);
        factory('App\Size')->create(['name' => '4.00-4.99']);
        factory('App\Size')->create(['name' => '5.00-9.99']);
        factory('App\Size')->create(['name' => '10.00-11.00']);
    }
}
