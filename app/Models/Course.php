<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function jadwal() {
        return $this->hasMany(JadwalKursus::class);
    }

    public function angkatan() {
        return $this->hasMany(Angkatan::class);
    }
}
