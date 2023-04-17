<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'room_id', 'checkin_date', 'checkout_date', 'total_adults', 'total_children'
    ];
    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
}
