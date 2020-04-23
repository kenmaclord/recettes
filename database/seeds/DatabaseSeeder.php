<?php

use Illuminate\Database\Seeder;
use Potassium\Database\Seeds\PackageDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PackageDatabaseSeeder::class);
    }
}
