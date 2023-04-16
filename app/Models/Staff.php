<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo', 'full_name', 'departement_id', 'bio', 'salary_type', 'salary_amount'
    ];
    function StaffDepartment()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }
}
