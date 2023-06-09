<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class RoomType extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','detail', 'adults', 'children','price','image_path'
    ];
    function Room()
    {
        return $this->hasMany(Room::class);
    }
    public function roomTypeImgs()
    {
        return $this->hasMany(RoomTypeImage::class, 'roomType_id');
    }
    public function amenities()
    {
        return $this->belongsToMany(Amenities::class,'amenity_room_type');
    }
    public function complements()
    {
        return $this->belongsToMany(Complements::class,'complement_room_type');
    }
    public function beds()
    {
        return $this->belongsToMany(Bed::class,'bed_room_type');
    }
}
