<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
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
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
