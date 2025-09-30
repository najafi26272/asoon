<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsStep extends Model
{
    use HasFactory;

    protected $fillable = [
        'creator_id','news_id','step_id','description',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function step()
    {
        return $this->belongsTo(Step::class, 'step_id');
    }

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }
}
