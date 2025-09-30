<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'creator_id',
        'user_id',
        'start_date',
        'deadline',
        'category_id'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function members(){
        return $this->belongsToMany(User::class, 'project_users');
    }
    
    public function projectTask(){
        return $this->hasMany(ProjectTask::class);
    }
    
    public function getPercentAttribute(){
        $total_tasks = ProjectTask::whereProjectId($this->id)->count();
        $done_tasks = ProjectTask::whereProjectId($this->id)->whereStatus('finished')->count();
        if( $total_tasks){
            return ($done_tasks * 100) / $total_tasks;
        }else{
            return 0;
        }

    }

}
