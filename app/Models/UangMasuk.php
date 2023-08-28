<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UangMasuk extends Model
{
    use HasFactory;
    protected $table = 'uang_masuk';
    protected $guarded = [];


    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id');
    }

}
