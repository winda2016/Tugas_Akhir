<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function kursus() {
        return $this->belongsTo(Course::class, 'course_id');
    }

   
}
