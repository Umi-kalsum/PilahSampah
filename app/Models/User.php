<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'profile_picture', // pastikan ini ada di sini
    ];

    // Atau jika menggunakan guarded
    // protected $guarded = ['id']; // Jika ingin melindungi id dari mass-assignment
}
