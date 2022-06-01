<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    protected $casts = [
        'tgl_lahir' => 'date'
    ];

    public function kehadiran()
    {
        return $this->hasMany(Kehadiran::class);
    }
}
