<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class RoomType extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','detail','price','image_path'
    ];
    function Room()
    {
        return $this->hasMany(Room::class);
    }
    public function roomTypeImgs()
    {
        return $this->hasMany(RoomTypeImage::class, 'roomType_id');
    }
}
