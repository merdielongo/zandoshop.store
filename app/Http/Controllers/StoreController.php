<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStoreWithOwnerRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\IdentityType;
use App\Models\Person;
use App\Models\PersonType;
use App\Models\Store;
use App\Models\StoreType;
use App\Models\User;
use App\Repositories\StoreRepository;
use App\Repositories\StoreTypeRepository;
use App\Services\PersonService;
use App\Services\StoreService;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use PragmaRX\Countries\Package\Countries;

class StoreController extends Controller
{

    protected StoreRepository $storeRepository;
    protected StoreTypeRepository $storeTypeRepository;

    protected StoreService $storeService;

    public function __construct(StoreRepository $storeRepository, StoreTypeRepository $storeTypeRepository, StoreService $storeService)
    {
        $this->storeRepository = $storeRepository;
        $this->storeTypeRepository = $storeTypeRepository;
        $this->storeService = $storeService;
    }

    public function index()
    {
        return Inertia::render('store/index', [
            'stores' => $this->storeRepository->getWithTypeAndOwner()
        ]);
    }

    public function create()
    {
        return Inertia::render('store/create', [
            'storeTypes' => StoreType::get(),
            'countries' => Countries::all(),
            'cities' => City::get(),
            'identities' => IdentityType::get()
        ]);
    }

    public function storeWithOwner(CreateStoreWithOwnerRequest $request, PersonService $personService)
    {
        return DB::transaction(function () use ($request, $personService) {

            $person = $personService->create($request, PersonType::OWNER);
            $this->storeService->create($request, $person);
            sleep(1);
            return redirect()->route('dashboard.stores.index')->with('message', 'Store Created Successfully');

        });
    }

}
