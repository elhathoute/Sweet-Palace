<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'roomType_id'
    ];
    function RoomType()
    {
        return $this->belongsTo(RoomType::class,'roomType_id');
    }
}
