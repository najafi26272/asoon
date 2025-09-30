<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jalase extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'creator_id',
        'date',
        'invited',
    ];
    public function categories(){
        return $this->belongsToMany(Category::class, 'jalase_categories');
    }

    public function hazerin(){
        return $this->belongsToMany(User::class, 'jalase_hazerins');
    }

    public function ghayebin(){
        return $this->belongsToMany(User::class, 'jalase_ghayebins');
    }

    public function mosavabat(){
        return $this->hasMany(Mosavabat::class);
    }

    public function getPercentAttribute(){
        $total_tasks = Mosavabat::whereJalaseId($this->id)->count();
        $done_tasks = Mosavabat::whereJalaseId($this->id)->whereStatus('finished')->count();
        if( $total_tasks){
            return ($done_tasks * 100) / $total_tasks;
        }else{
            return 0;
        }

    }

}
