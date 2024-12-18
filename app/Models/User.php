<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> c122ea82adc456d75c829b454c243494c1901389
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
<<<<<<< HEAD
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'profile_picture', // pastikan ini ada di sini
    ];

    // Atau jika menggunakan guarded
    // protected $guarded = ['id']; // Jika ingin melindungi id dari mass-assignment
=======
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
>>>>>>> c122ea82adc456d75c829b454c243494c1901389
}
