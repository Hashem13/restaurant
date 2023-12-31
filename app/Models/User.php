<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'fullname', 'email', 'password', 'address', 'phone', 'birthdate', 'is_admin',
    ];

    public function isAdmin()
    {
        return $this->is_admin === 1; 
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'created_by');
    }
}