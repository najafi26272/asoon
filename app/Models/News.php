<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class News extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'creator_id',
        'link',
        'content',
        'summary',
        'agency',
        'topic',
        'reason',
        'goals',
        'channels',
        'languages',
        'priority',
        'status',
        'need_cover',
        'updated_by',
        'description',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'need_cover' => 'boolean',
    ];
    /**
     * Get the creator associated with the news.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
    /**
     * Get the user who last updated the news.
    */
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function editorsAssignments()
    {
        return $this->hasMany(AssignEditor::class, 'news_id');
    }

    public function assignedEditors()
    {
        // اگر لازم باشد دسترسی مستقیم به کاربران ویرایشگرها
        return $this->belongsToMany(User::class, 'assign_editors', 'news_id', 'editor_id')
                    ->withTimestamps();
    }

    public function step()
    {
        return $this->belongsTo(NewsStep::class, 'status');
    }

    public function editNews()
    {
        return $this->hasOne(EditNews::class)->latestOfMany('created_at');;
    }
    public function reviews()
    {
        return $this->hasMany(EditNews::class);
    }

    public function titles()
    {
        return $this->hasMany(Title::class);
    }

    public function webTitle()
    {
        return $this->hasMany(Title::class)->where('channel', 'web');
    }

    public function socialTitle()
    {
        return $this->hasMany(Title::class)->where('channel', 'socialMedia');
    }

    public function latestWebTitle()
    {
        return $this->hasOne(Title::class)
                    ->where('channel', 'web')
                    ->latestOfMany('created_at');
    }

    public function latestSocialTitle()
    {
        return $this->hasOne(Title::class)
                    ->where('channel', 'socialMedia')
                    ->latestOfMany('created_at');
    }

}