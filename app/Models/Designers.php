<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Designers extends Model
{
    use HasFactory,Notifiable,SoftDeletes;

    protected $table = 'designers';
    protected $fillable = [
            'name',
            'image',
            'email',
            'phone',
            'description',
            'facebook',
            'twitter',
            'instagram'
    ];

    public function real_estates(){
        return $this->hasMany(Real_estates::class);
    }
}
