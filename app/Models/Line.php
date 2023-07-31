<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Line extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'owner_id',
        'store_id',
        'manager_id',
        'enable'
    ];

    public function owner() : BelongsTo
    {
        return $this->belongsTo(Person::class, 'owner_id');
    }

    public function store() : BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function manager() : BelongsTo
    {
        return $this->belongsTo(Person::class, 'manager_id');
    }

}
