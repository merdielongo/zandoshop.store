<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_fr',
        'name_en',
        'prefix',
        'flag_url',
        'is_active'
    ];

    public function cities() : HasMany
    {
        return $this->hasMany(City::class);
    }

    public function people() : HasMany
    {
        return $this->hasMany(Person::class);
    }

    public function stores() : HasMany
    {
        return $this->hasMany(Store::class);
    }

}
