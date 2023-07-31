<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'store_id',
        'thumbnail',
        'description',
        'encoder_id',
        'key',
        'slug',
        'is_publish',
        'price'
    ];

    public function store() : BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function encoder() : BelongsTo
    {
        return $this->belongsTo(Person::class, 'encoder_id');
    }

}
