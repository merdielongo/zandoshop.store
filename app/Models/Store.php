<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'owner_id',
        'thumbnail',
        'is_active',
        'status',
        'code',
        'store_type_id',
        'parent_store_id',
        'is_public',
        'address',
        'country_id',
        'city_id',
        'email',
        'phone'
    ];

    public function owner() : BelongsTo
    {
        return $this->belongsTo(Person::class, 'owner_id');
    }

    public function storeType() : BelongsTo
    {
        return $this->belongsTo(StoreType::class);
    }

    public function parentStore() : BelongsTo
    {
        return $this->belongsTo(Person::class, 'parent_store_id');
    }

    public function country() : BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function city() : BelongsTo
    {
        return $this->belongsTo(City::class);
    }

}
