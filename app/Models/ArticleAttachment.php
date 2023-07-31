<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArticleAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'attachment_id',
    ];

    public function article() : BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

    public function attachment() : BelongsTo
    {
        return $this->belongsTo(Attachment::class);
    }

}
