<?php

use Illuminate\Database\Seeder;

class DesignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Designation')->create(['name' => 'Partner']);
        factory('App\Designation')->create(['name' => 'Proprietor']);
        factory('App\Designation')->create(['name' => 'Director']);
        factory('App\Designation')->create(['name' => 'Owner']);
        factory('App\Designation')->create(['name' => 'Director']);
        factory('App\Designation')->create(['name' => 'Assorter']);
        factory('App\Designation')->create(['name' => 'Sales Manager']);
        factory('App\Designation')->create(['name' => 'Individual']);
        factory('App\Designation')->create(['name' => 'CO(CEO)']);
        factory('App\Designation')->create(['name' => 'Manager']);
        factory('App\Designation')->create(['name' => 'Marketng Head']);
        factory('App\Designation')->create(['name' => 'General Manager']);
        factory('App\Designation')->create(['name' => 'Partners']);
        factory('App\Designation')->create(['name' => 'CEO']);
        factory('App\Designation')->create(['name' => 'Managing Director']);
        factory('App\Designation')->create(['name' => 'Accounts Head']);
        factory('App\Designation')->create(['name' => 'Employee']);
        factory('App\Designation')->create(['name' => 'Sales Executive']);
        factory('App\Designation')->create(['name' => 'Manager']);
        factory('App\Designation')->create(['name' => 'Marketing Manager']);
        factory('App\Designation')->create(['name' => 'Accounts Manager']);
        factory('App\Designation')->create(['name' => 'GM']);
        factory('App\Designation')->create(['name' => 'Auth.Signatory']);
        factory('App\Designation')->create(['name' => 'Partnership']);
        factory('App\Designation')->create(['name' => 'Purchase Manager']);
    }
}
