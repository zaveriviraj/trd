<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User')->create(['email' => 'viraj@d.net', 'name' => 'Viraj Zaveri', 'password' => Hash::make('VZ@1234')]);
        factory('App\User')->create(['email' => 'shimon@d.net', 'name' => 'Shimon Gerstensang', 'password' => Hash::make('SG@1234')]);
        factory('App\User')->create(['email' => 'amit@d.net', 'name' => 'Amit Kronfeld', 'password' => Hash::make('AK@1234')]);
        factory('App\User')->create(['email' => 'rap@d.net', 'name' => 'Martin Rapaport', 'password' => Hash::make('MR@1234')]);
    }
}
