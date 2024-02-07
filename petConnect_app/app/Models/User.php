<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'role',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    // Fonction pour attribuer automatiquement le rôle 'buyer'
    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->role = 'buyer';
        });
    }

    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    // Relation avec les messages reçus par l'utilisateur
    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }
}
