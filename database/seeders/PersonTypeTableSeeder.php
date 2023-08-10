<?php

namespace Database\Seeders;

use App\Models\PersonType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonType::updateOrCreate(['name' => 'manager']);
        PersonType::updateOrCreate(['name' => 'owner']);
        PersonType::updateOrCreate(['name' => 'customer']);
        PersonType::updateOrCreate(['name' => 'organization']);
    }
}
