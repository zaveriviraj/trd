<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Product')->create(['name' => 'Rings']);
        factory('App\Product')->create(['name' => 'Earrings']);
        factory('App\Product')->create(['name' => 'Bracelets']);
        factory('App\Product')->create(['name' => 'Necklaces']);
        factory('App\Product')->create(['name' => 'Soltaires']);
    }
}
