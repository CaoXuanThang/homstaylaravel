<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory,Notifiable , SoftDeletes;

    protected $table = 'news';
    protected $fillable = [
        'title',
        'description',
        'image',
        'news_category_id',

    ];
    public function news_category(){
        return $this->belongsTo(New_categories::class);
    }
}
