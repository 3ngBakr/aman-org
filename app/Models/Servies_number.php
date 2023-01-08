<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servies_number extends Model
{
    use HasFactory;
    protected $table = 'servies_number';
    protected $fillable = [
        
        'name',
        'number'
       
        
    ];
}
