<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    function room_Beds()
    {
        return $this->belongsToMany(RoomType::class,'bed_room_type');
    }
}
