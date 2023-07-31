<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'person_id',
        'price',
        'ship_name',
        'ship_address',
        'ship_address_2',
        'phone',
        'email',
        'date',
        'validated_at',
        'is_completed'
    ];

    public function person() : BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

}
