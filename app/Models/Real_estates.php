<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Real_estates extends Model
{
    use HasFactory, Notifiable, SoftDeletes;
    protected $table = 'real_estates';
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'address',
        'baths',
        'beds',
        'real_estate_category_id',
        'designer_id',
        'deleted_at'
    ];

    public function real_estate_category()
    {
        return $this->belongsTo(Real_estate_categories::class);
    }
    public function contact(){
        return $this->belongsTo(Contact::class);
    }
    public function designer(){
        return $this->belongsTo(Designers::class);
    }
}
