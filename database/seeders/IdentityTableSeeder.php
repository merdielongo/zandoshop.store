<?php

namespace Database\Seeders;

use App\Models\IdentityType;
use Illuminate\Database\Seeder;

class IdentityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IdentityType::updateOrCreate(['name' => 'passport']);
        IdentityType::updateOrCreate(['name' => 'permis']);
        IdentityType::updateOrCreate(['name' => 'elector']);
    }
}
