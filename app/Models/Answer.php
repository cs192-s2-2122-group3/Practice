<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $table = 'answers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'description',
        'item_id',
        'type',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
