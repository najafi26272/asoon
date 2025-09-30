<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectTask extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'description',
        'status',
        'project_id',
        'sms_status',
        'end_date','priority'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
