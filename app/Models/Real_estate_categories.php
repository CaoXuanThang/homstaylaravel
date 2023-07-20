<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Real_estate_categories extends Model
{
    use HasFactory, Notifiable,softDeletes;
    protected $table = 'real_estate_categories';
    protected $fillable = [
        'name',
        'description',
    ];
    public function real_estates()
    {
        return $this->hasMany(RealEstate::class);
    }
}
