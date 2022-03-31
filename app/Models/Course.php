<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
    ];

    protected $casts = [
        'created_at' => 'datetime:m/d/Y h:i'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_course', 'course_id', 'user_id',)
            ->withTimestamps()
            ->withPivot(['is_handler'])
            ->as('user_course');
    }

    public function handlers()
    {
        return $this->belongsToMany(User::class, 'user_course', 'course_id', 'user_id',)
            ->withTimestamps()
            ->withPivot(['is_handler'])
            ->wherePivot('is_handler', 1);
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'user_course', 'course_id', 'user_id',)
            ->withTimestamps()
            ->withPivot(['is_handler'])
            ->wherePivot('is_handler', 0);
    }
}
