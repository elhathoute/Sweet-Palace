<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complements extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    function roomComplements()
    {
        return $this->belongsTo(RoomType::class);
    }
}
