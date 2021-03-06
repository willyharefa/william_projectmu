<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    protected $casts = [
        'birthday' => 'date'
    ];

    public function kehadiran()
    {
        return $this->hasMany(Kehadiran::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
