<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenities extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    function room_Amenities()
    {
        return $this->belongsToMany(RoomType::class);
    }
}
