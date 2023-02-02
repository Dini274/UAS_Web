<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'title',
        'topping',
        'price',
        'rating',
        'desc',
        'image',
    ];
    use HasFactory;
}
