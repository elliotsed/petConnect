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
}
