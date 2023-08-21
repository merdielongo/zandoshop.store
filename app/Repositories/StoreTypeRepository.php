<?php

namespace App\Repositories;

use App\Models\StoreType;
use Illuminate\Database\Eloquent\Collection;

class StoreTypeRepository
{
    /**
     * The StoreType model.
     *
     * @var StoreType
     */
    protected $storeType;

    /**
     * StoreTypeRepository constructor.
     *
     * @param StoreType|null $storeType
     */
    public function __construct(StoreType $storeType = null)
    {
        $this->storeType = $storeType ?? new StoreType();
    }

    /**
     * Retrieve a specified storeType from database by id.
     *
     * @param $id
     * @return StoreType
     */
    public function getById($id)
    {
        return $this->storeType->findOrFail($id);
    }

    /**
     * Retrieve all storeType from database.
     *
     * @return Collection|static[]
     */
    public function getAll()
    {
        return $this->storeType->all();
    }

    /**
     * Get a list of storeType by pagination.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getPaginate($n = 15)
    {
        return $this->storeType->paginate($n);
    }

    /**
     * Check if an instance exists according to a given value.
     *
     * @return bool
     */
    public function exists($field, $value, $condition = '=')
    {
        return $this->storeType->where($field, $condition, $value)->exists();
    }

    /**
     * Retrieve a storeType from database by a field according to a given value.
     *
     * @return StoreType
     */
    public function get($field, $value, $condition = '=')
    {
        return $this->storeType->where($field, $condition, $value)->firstOrFail();
    }

    /**
     * Retrieve a listing of storeType from database according to constraints by pagination.
     *
     * @param array $constraints
     * @param int $n
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getListByPagination(array $constraints, $n = 30)
    {
        return $this->storeType->where($constraints)->paginate($n);
    }

    /**
     * Retrieve a listing of storeType from database according to constraints.
     *
     * @param array $constraints
     * @return Collection|static[]
     */
    public function getList(array $constraints)
    {
        return $this->storeType->where($constraints)->get();
    }

    /**
     * Store a new storeType in the database.
     *
     * @param array $inputs
     * @return StoreType
     */
    public function store(array $inputs)
    {
        return $this->storeType->create($inputs);
    }

    /**
     * Update a storeType
     *
     * @return StoreType
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
     * Remove a storeType from database.
     *
     * @return void
     */
    public function delete($id)
    {
        $this->getById($id)->delete();
    }

    //
}
