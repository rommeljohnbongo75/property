<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }

    // Specify the fillable fields
    protected $fillable = ['listing_id', 'email', 'description'];
}
