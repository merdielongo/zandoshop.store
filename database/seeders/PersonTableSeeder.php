<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\PersonType;
use App\Models\User;
use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::updateOrCreate([
            'name' => 'root',
            'email' => 'support@zandoshop.store',
            'password' => bcrypt('zandoshop@mervi'),
            'username' => 'zandoshop',
            'is_active' => true,
            'code' => 'AA-00-AA-00'
        ]);

        Person::updateOrCreate([
            'firstname' => 'zandoshop',
            'user_id' => $user->id,
            'person_type_id' => PersonType::whereName('organization')->first()->id
        ]);

    }
}
