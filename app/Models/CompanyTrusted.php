<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyTrusted extends Model
{
    protected $fillable = [
        'description',
        'images',
    ];
    use HasFactory;
}
