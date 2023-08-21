<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PersonTypeTableSeeder::class);
        $this->call(PersonTableSeeder::class);
        $this->call(StoreTypeTableSeeder::class);
        $this->call(StoreTableSeeder::class);
        $this->call(IdentityTableSeeder::class);
    }
}
