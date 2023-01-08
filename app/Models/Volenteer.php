<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volenteer extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'title',
        'description',
        'about_image',
        'status',
        
    ];
}
