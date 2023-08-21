<?php

namespace App\Services;

use App\Models\Country;
use App\Models\Person;
use App\Models\Store;
use App\Repositories\StoreRepository;
use Illuminate\Http\Request;

class StoreService
{

    protected StoreRepository $storeRepository;

    public function __construct(StoreRepository $storeRepository)
    {
        $this->storeRepository = $storeRepository;
    }

    public function create(Request $request, Person $person) : Store
    {
        return $this->storeRepository->store([
            'name' => $request->input('name'),
            'owner_id' => $person->id,
            'store_type_id' => $request->input('type'),
            'address' => $request->input('store_address'),
            'country_id' => Country::updateOrCreate(['name_fr' => $request->input('store_country'), 'is_active' => true])->id,
            'email' => $request->input('store_email'),
        ]);
    }

}
