<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $table = 'tests';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'state',
        'user_id',
        'course_id',
        'count',
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function attempts()
    {
        return $this->hasMany(Attempt::class);
    }
}
