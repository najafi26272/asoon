<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentMessage extends Model
{
    protected $fillable =['message','user_id','folder_id','status','role'];
}
