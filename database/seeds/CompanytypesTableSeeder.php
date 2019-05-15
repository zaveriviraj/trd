<?php

use Illuminate\Database\Seeder;

class CompanytypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Companytype')->create(['name' => 'Dealer']);
        factory('App\Companytype')->create(['name' => 'Education']);
        factory('App\Companytype')->create(['name' => 'Manufacturer']);
        factory('App\Companytype')->create(['name' => 'Media']);
        factory('App\Companytype')->create(['name' => 'Retailer']);
    }
}
