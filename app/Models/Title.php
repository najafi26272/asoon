<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Title extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'creator_id',
        'news_id',
        'reviewer_id',
        'channel',
        'status',
        'description',
    ];
    /**
     * Get the creator associated with the news.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
    /**
     * Get the user who last updated the news.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }
}
