<?php

namespace App\Services;

use App\Models\Country;
use App\Models\Person;
use App\Models\PersonType;
use App\Models\User;
use App\Repositories\PersonRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonService
{

    protected UserRepository $userRepository;
    protected PersonRepository $personRepository;

    public function __construct(UserRepository $userRepository, PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
        $this->userRepository = $userRepository;
    }

    public function create(Request $request, string $type) : Person
    {
        return DB::transaction(function () use ($request, $type) {
           $user = $this->userRepository->store([
               'email' => $request->input('email'),
               'password' => bcrypt($request->input('email')),
               'name' => $request->input('firstname'),
           ]);

           if ($request->exists('password')) {
               $this->changePassword($user, $request->input('password'));
           }

           return $this->personRepository->store([
               'firstname' => $request->input('firstname'),
               'lastname' => $request->input('lastname'),
               'middle_name' => $request->input('middlename'),
               'gender' => $request->input('gender'),
               'birth_date' => $request->input('birthdate'),
               'birth_place' => $request->input('birthplace'),
               'user_id' => $user->id,
               'nationality' => $request->input('nationality'),
               'identity_type_id' => $request->input('identity_type'),
               'identity_number' => $request->input('identity_number'),
               'person_type_id' => PersonType::whereName($type)->first()->id,
               'phone' => $request->input('phone'),
               'address' => $request->input('address'),
               'email' => $request->input('email'),
               'country_id' => Country::updateOrCreate(['name_fr' => $request->input('country'), 'is_active' => true])->id,
           ]);
        });
    }

    public function changePassword(User $user, string $password) : User
    {
        $user->password = bcrypt($password);
        $user->save();

        return $user;
    }

}
