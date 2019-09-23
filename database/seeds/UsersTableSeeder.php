<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User')->create(['email' => 'viraj@d.net', 'name' => 'Viraj Zaveri']);
        factory('App\User')->create(['email' => 'shimon@d.net', 'name' => 'Shimon Gerstensang']);
        factory('App\User')->create(['email' => 'amit@d.net', 'name' => 'Amit Kronfeld']);
    }
}
