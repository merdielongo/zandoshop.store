<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArticlePath extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'article_category_id',
    ];

    public function article() : BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

    public function articleCategory() : BelongsTo
    {
        return $this->belongsTo(ArticleCategory::class);
    }

}
