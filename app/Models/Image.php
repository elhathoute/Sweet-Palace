<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RoomType;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'roomType_id',
    ];
    public function roomTypeImages()
    {
        return $this->belongsTo(RoomType::class);
    }
}
