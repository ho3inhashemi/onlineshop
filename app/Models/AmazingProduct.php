<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmazingProduct extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'Fa-name',
        'En-name',
        'slug',
        'price',
        'explanation',
        'status',
        'img',
        'views',
        'discount',
];
}
