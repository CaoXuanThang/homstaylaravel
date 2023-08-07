<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Marketing_banners extends Model
{
    use HasFactory,Notifiable,SoftDeletes;
    protected $table = 'marketing_banners';
    protected $fillable = [
        'image',
        'deleted_at'
    ];
}
