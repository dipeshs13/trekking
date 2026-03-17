<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = [
    'trek_title', 
    'start_date', 
    'end_date', 
    'total_participants', 
    'base_price',
    'total_price',
    'total_amount', 
    'payment_method',
    
];

    public function participants(){
        return $this->hasMany(Participant::class);
    }
}
