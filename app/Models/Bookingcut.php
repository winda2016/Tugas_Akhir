<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookingcut extends Model
{
    use HasFactory;
    protected $table = 'booking_cuts';
    protected $guarded = [];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function stylist()
    {
        return $this->belongsTo(Stylist::class, 'stylist_id');
    }

    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'treatment_id');
    }

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class, 'booking_treatment', 'booking_id', 'treatment_id');
    }
}
