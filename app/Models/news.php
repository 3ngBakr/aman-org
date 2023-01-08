<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'title',
        'description',
        'news_image',
        'actegorie_id',
        'status',
        
    ];
    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }


    
}
