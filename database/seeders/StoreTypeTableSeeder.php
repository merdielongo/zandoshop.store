<?php

namespace Database\Seeders;

use App\Models\StoreType;
use Illuminate\Database\Seeder;

class StoreTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreType::updateOrCreate(['name' => 'organization']);
        StoreType::updateOrCreate(['name' => 'magasin']);
        StoreType::updateOrCreate(['name' => 'pharmacy']);
        StoreType::updateOrCreate(['name' => 'restaurant']);
    }
}
