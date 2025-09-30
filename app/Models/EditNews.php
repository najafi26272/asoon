<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EditNews extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'news_id',
        'editor_id',
        'edited_content',
        'status',
        'description',
    ];

    public function editor()
    {
        return $this->belongsTo(User::class, 'editor_id');
    }

    public function assigner()
    {
        return $this->belongsTo(User::class, 'assigner_id');
    }

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }
}
