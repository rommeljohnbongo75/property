<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'address',
        'address2',
        'city',
        'zip',
        'latitude',
        'longitude',
        // Add other attributes that you want to allow mass assignment for
    ];

    // Define the inverse relationship with the Rental model
    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }
}
