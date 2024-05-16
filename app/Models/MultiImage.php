<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiImage extends Model
{
    protected $fillable=[
        'image',
        'main_image',
        'rental_id',
    ];

}
