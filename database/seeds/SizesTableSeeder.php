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
        factory('App\Size')->create(['name' => '-0.03', 'size_start' => '0', 'size_end' => '0.03']);
        factory('App\Size')->create(['name' => '0.04-0.07', 'size_start' => '0.04', 'size_end' => '0.07']);
        factory('App\Size')->create(['name' => '0.08-0.14', 'size_start' => '0.08', 'size_end' => '0.14']);
        factory('App\Size')->create(['name' => '0.15-0.17', 'size_start' => '0.15', 'size_end' => '0.17']);
        factory('App\Size')->create(['name' => '0.18-0.22', 'size_start' => '0.18', 'size_end' => '0.22']);
        factory('App\Size')->create(['name' => '0.23-0.29', 'size_start' => '0.23', 'size_end' => '0.29']);
        factory('App\Size')->create(['name' => '0.30-0.39', 'size_start' => '0.30', 'size_end' => '0.39']);
        factory('App\Size')->create(['name' => '0.40-0.49', 'size_start' => '0.40', 'size_end' => '0.49']);
        factory('App\Size')->create(['name' => '0.50-0.69', 'size_start' => '0.50', 'size_end' => '0.69']);
        factory('App\Size')->create(['name' => '0.70-0.89', 'size_start' => '0.70', 'size_end' => '0.89']);
        factory('App\Size')->create(['name' => '0.90-0.99', 'size_start' => '0.90', 'size_end' => '0.99']);
        factory('App\Size')->create(['name' => '1.00-1.49', 'size_start' => '1.00', 'size_end' => '1.49']);
        factory('App\Size')->create(['name' => '1.50-1.99', 'size_start' => '1.50', 'size_end' => '1.99']);
        factory('App\Size')->create(['name' => '2.00-2.99', 'size_start' => '2.00', 'size_end' => '2.99']);
        factory('App\Size')->create(['name' => '3.00-3.99', 'size_start' => '3.00', 'size_end' => '3.99']);
        factory('App\Size')->create(['name' => '4.00-4.99', 'size_start' => '4.00', 'size_end' => '4.99']);
        factory('App\Size')->create(['name' => '5.00-9.99', 'size_start' => '5.00', 'size_end' => '9.99']);
        factory('App\Size')->create(['name' => '10.00+', 'size_start' => '10.00', 'size_end' => '10.00']);
    }
}
