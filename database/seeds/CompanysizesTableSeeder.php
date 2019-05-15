<?php

use Illuminate\Database\Seeder;

class CompanysizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Companysize')->create(['name' => 'Large']);
        factory('App\Companysize')->create(['name' => 'Medium']);
        factory('App\Companysize')->create(['name' => 'Small']);
    }
}
