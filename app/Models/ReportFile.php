<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportFile extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'file',
        'user_id',
        'related_month',
        'year',
        'size',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
