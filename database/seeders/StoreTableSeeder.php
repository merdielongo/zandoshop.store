<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\Store;
use App\Models\StoreType;
use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Store::updateOrCreate([
            'name' => 'Zandoshop',
            'owner_id' => Person::whereFirstname('zandoshop')->first()->id,
            'is_active' => true,
            'is_public' => true,
            'store_type_id' => StoreType::whereName('organization')->first()->id
        ]);
    }
}
