<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'internal_name',
        'description',
        // Add other attributes that you want to allow mass assignment for
    ];
    public function mutipalImage()
    {
        return $this->hasMany(MultiImage::class)->where('main_image','1');
    }

    public function location()
    {
        return $this->hasMany(Location::class);
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
