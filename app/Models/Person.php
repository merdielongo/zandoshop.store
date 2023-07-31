<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'firstname',
        'lastname',
        'middle_name',
        'gender',
        'birth_date',
        'birth_place',
        'user_id',
        'photo',
        'nationality',
        'identity_type_id',
        'identity_number',
        'person_type_id',
        'phone',
        'address',
        'email',
        'country_id',
        'city_id'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function identityType() : BelongsTo
    {
        return $this->belongsTo(IdentityType::class);
    }

    public function personType() : BelongsTo
    {
        return $this->belongsTo(PersonType::class);
    }

    public function country() : BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function city() : BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function stores() : HasMany
    {
        return $this->hasMany(Store::class, 'owner_id');
    }

}
