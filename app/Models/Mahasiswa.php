<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function akun()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class);
    }
}
