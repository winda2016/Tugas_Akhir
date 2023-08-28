<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKursus extends Model
{
    use HasFactory;
    protected $table = 'jadwal_kursus';
    protected $guarded = [];

    public function kursus(){
        return $this->belongsTo(Course::class, 'course_id');
    }
}
