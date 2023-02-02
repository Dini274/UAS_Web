<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunity extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'images',
    ];
    use HasFactory;
}
