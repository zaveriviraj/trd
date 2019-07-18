<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PrioritiesTableSeeder::class);
        $this->call(CompanysizesTableSeeder::class);
        $this->call(CompanytypesTableSeeder::class);
        $this->call(CompanydealsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(ShapesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(ClaritiesTableSeeder::class);
        $this->call(CutsTableSeeder::class);
        $this->call(CertsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(RoughsTableSeeder::class);
    }
}
