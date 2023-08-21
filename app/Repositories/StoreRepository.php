<?php

namespace App\Repositories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Collection;

class StoreRepository
{
    /**
     * The Store model.
     *
     * @var Store
     */
    protected $store;

    /**
     * StoreRepository constructor.
     *
     * @param Store|null $store
     */
    public function __construct(Store $store = null)
    {
        $this->store = $store ?? new Store();
    }

    /**
     * Retrieve a specified store from database by id.
     *
     * @param $id
     * @return Store
     */
    public function getById($id)
    {
        return $this->store->findOrFail($id);
    }

    /**
     * Retrieve all store from database.
     *
     * @return Collection|static[]
     */
    public function getAll()
    {
        return $this->store->all();
    }

    /**
     * Get a list of store by pagination.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getPaginate($n = 15)
    {
        return $this->store->paginate($n);
    }

    /**
     * Check if an instance exists according to a given value.
     *
     * @return bool
     */
    public function exists($field, $value, $condition = '=')
    {
        return $this->store->where($field, $condition, $value)->exists();
    }

    /**
     * Retrieve a store from database by a field according to a given value.
     *
     * @return Store
     */
    public function get($field, $value, $condition = '=')
    {
        return $this->store->where($field, $condition, $value)->firstOrFail();
    }

    /**
     * Retrieve a listing of store from database according to constraints by pagination.
     *
     * @param array $constraints
     * @param int $n
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getListByPagination(array $constraints, $n = 30)
    {
        return $this->store->where($constraints)->paginate($n);
    }

    /**
     * Retrieve a listing of store from database according to constraints.
     *
     * @param array $constraints
     * @return Collection|static[]
     */
    public function getList(array $constraints)
    {
        return $this->store->where($constraints)->get();
    }

    /**
     * Store a new store in the database.
     *
     * @param array $inputs
     * @return Store
     */
    public function store(array $inputs)
    {
        return $this->store->create($inputs);
    }

    /**
     * Update a store
     *
     * @return Store
     */
    public function update(array $inputs, $id)
    {
        $instance = $this->getById($id);
        foreach($inputs as $property => $value)
            $instance->$property = $value;
        $instance->save();
        return $this->getById($id);
    }

    /**
     * Remove a store from database.
     *
     * @return void
     */
    public function delete($id)
    {
        $this->getById($id)->delete();
    }

    public function getWithTypeAndOwner(int $n = 30)
    {
        return $this->store->with(['storeType', 'owner'])->get();
    }
}
