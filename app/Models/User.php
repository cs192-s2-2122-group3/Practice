<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

\Carbon\Carbon::setToStringFormat('d-m-Y');

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',

        'description',
        'birth_date',

        'role',
        'user_name',
        'email',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birth_date' => 'date',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<int, string>
     */
    protected $dates = [
        'birth_date',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'user_course', 'user_id', 'course_id')
            ->withTimestamps()
            ->withPivot(['is_handler'])
            ->as('user_course');
    }

    public function handling()
    {
        return $this->belongsToMany(Course::class, 'user_course', 'user_id', 'course_id')
            ->withTimestamps()
            ->withPivot(['is_handler'])
            ->wherePivot('is_handler', 1);
    }

    public function enrolled()
    {
        return $this->belongsToMany(Course::class, 'user_course', 'user_id', 'course_id')
            ->withTimestamps()
            ->withPivot(['is_handler'])
            ->wherePivot('is_handler', 0);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function attempts()
    {
        return $this->hasMany(Attempt::class);
    }

    public function hasRole($role)
    {
        return $this->role == $role;
    }
}
