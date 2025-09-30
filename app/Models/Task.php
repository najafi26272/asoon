<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'task',
        'user_id',
        'status',
        'mosavabe_id',
        'end_date',
        'priority',
        'finished_date',
        'sms_status',
        'report_status',
        'project_id',
        'report_only',
        'time',
        'description'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
