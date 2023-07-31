<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'person_id',
        'line_id',
        'enable',
        'staff_category_id',
    ];

    public function person() : BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function line() : BelongsTo
    {
        return $this->belongsTo(Line::class);
    }

    public function staffCategory() : BelongsTo
    {
        return $this->belongsTo(StaffCategory::class);
    }

}
