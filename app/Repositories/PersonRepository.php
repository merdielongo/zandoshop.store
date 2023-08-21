<?php

namespace App\Repositories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class PersonRepository
{
    /**
     * The Person model.
     *
     * @var Person
     */
    protected $person;

    /**
     * PersonRepository constructor.
     *
     * @param Person|null $person
     */
    public function __construct(Person $person = null)
    {
        $this->person = $person ?? new Person();
    }

    /**
     * Retrieve a specified person from database by id.
     *
     * @param $id
     * @return Person
     */
    public function getById($id)
    {
        return $this->person->findOrFail($id);
    }

    /**
     * Retrieve all person from database.
     *
     * @return Collection|static[]
     */
    public function getAll()
    {
        return $this->person->all();
    }

    /**
     * Get a list of person by pagination.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getPaginate($n = 15)
    {
        return $this->person->paginate($n);
    }

    /**
     * Check if an instance exists according to a given value.
     *
     * @return bool
     */
    public function exists($field, $value, $condition = '=')
    {
        return $this->person->where($field, $condition, $value)->exists();
    }

    /**
     * Retrieve a person from database by a field according to a given value.
     *
     * @return Person
     */
    public function get($field, $value, $condition = '=')
    {
        return $this->person->where($field, $condition, $value)->firstOrFail();
    }

    /**
     * Retrieve a listing of person from database according to constraints by pagination.
     *
     * @param array $constraints
     * @param int $n
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getListByPagination(array $constraints, $n = 30)
    {
        return $this->person->where($constraints)->paginate($n);
    }

    /**
     * Retrieve a listing of person from database according to constraints.
     *
     * @param array $constraints
     * @return Collection|static[]
     */
    public function getList(array $constraints)
    {
        return $this->person->where($constraints)->get();
    }

    /**
     * Store a new person in the database.
     *
     * @param array $inputs
     * @return Person
     */
    public function store(array $inputs)
    {
        return $this->person->create($inputs);
    }

    /**
     * Update a person
     *
     * @return Person
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
     * Remove a person from database.
     *
     * @return void
     */
    public function delete($id)
    {
        $this->getById($id)->delete();
    }

    //
}