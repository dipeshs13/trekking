<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    //
    protected $fillable = ['first_name', 'last_name', 'email', 'booking_id'];

    public function booking() {
        return $this->belongsTo(Booking::class);
    }
}
