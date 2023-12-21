<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'caracteristic',
        'age',
        'gender',
        'race_id',
        'photo',
        'user_id',
        'price',
        'title',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
