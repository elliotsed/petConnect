<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'sent_at',
        'status',
        'sender_id',
        'receiver_id',
    ];

    // Relation avec l'utilisateur expéditeur
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // Relation avec l'utilisateur destinataire
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
