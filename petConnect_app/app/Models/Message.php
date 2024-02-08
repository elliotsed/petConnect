<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'discussion_id',
        'content',
        'sender_id',
    ];

    public function discussion()
    {
        return $this->belongsTo(Discussion::class);
    }
}
