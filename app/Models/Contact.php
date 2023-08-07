<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use HasFactory,Notifiable,SoftDeletes;

    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'description',
        'status',
        'deleted_at'
    ];
}
