<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Real_estates extends Model
{
    use HasFactory;
    protected $table = 'real_estates';

    public function real_estate_category()
    {
        return $this->belongsTo(Real_estate_categories::class);
    }
}
