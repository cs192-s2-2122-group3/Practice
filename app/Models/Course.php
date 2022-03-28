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

    protected $dates = [
        'birth_date',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
