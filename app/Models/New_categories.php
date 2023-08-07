<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class New_categories extends Model
{
    use HasFactory,Notifiable
    , SoftDeletes;
    protected $table = 'new_categories';
    protected $fillable = [
        'name',
        'description',
        'image',
        'deleted_at'
    ];

    public function news(){
        return $this->hasMany(News::class);
    }
}
