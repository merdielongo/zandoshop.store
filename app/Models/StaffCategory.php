<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class StaffCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'label_fr',
        'label_en'
    ];

    public function staff(): HasMany
    {
        return $this->hasMany(Staff::class);
    }

}
