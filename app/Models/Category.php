<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title'
    ];
        
    public function jalases(){
        return $this->belongsToMany(Jalase::class, 'jalaset_categories' );
    }
}
