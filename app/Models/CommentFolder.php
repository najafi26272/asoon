<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentFolder extends Model
{
    protected $fillable = [
        'user_id','category','category_id'
    ];

    public function messages(){
        return $this->hasMany(CommentMessage::class,'folder_id');
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
