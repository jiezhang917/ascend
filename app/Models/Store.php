<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category',
        'theme',
        'donations',
        'images',
        'user_id',
        'qr'
    ];

    protected $casts = [
        'donations' => 'json',
    ];

    protected $hidden = [
        'user_id'
    ];
}
