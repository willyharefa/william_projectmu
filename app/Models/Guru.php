<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Guru extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'guru';
    protected $guarded = ['id'];

    protected $casts = [
        'tgl_lahir' => 'date'
    ];

    public function kehadiran()
    {
        return $this->hasMany(Kehadiran::class);
    }
}
