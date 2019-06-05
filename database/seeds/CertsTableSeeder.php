<?php

use Illuminate\Database\Seeder;

class CertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Cert')->create(['name' => 'GIA']);
        factory('App\Cert')->create(['name' => 'IGI']);
        factory('App\Cert')->create(['name' => 'IIDGR']);
        factory('App\Cert')->create(['name' => 'HRD']);
        factory('App\Cert')->create(['name' => 'GSI']);
        factory('App\Cert')->create(['name' => 'AGS']);
        factory('App\Cert')->create(['name' => 'RapLab']);
        factory('App\Cert')->create(['name' => 'None']);
    }
}
