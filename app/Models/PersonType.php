<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonType extends Model
{
    use HasFactory, SoftDeletes;

    const MANAGER = 'manager';
    const OWNER = 'owner';
    const CUSTOMER = 'customer';
    const ORGANIZATION = 'organization';

    protected $fillable = [
        'name'
    ];

    public function people() : HasMany
    {
        return $this->hasMany(Person::class);
    }

}
