<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Real_estate_categories extends Model
{
    use HasFactory;
    public function real_estates()
    {
        return $this->hasMany(RealEstate::class);
    }
}
