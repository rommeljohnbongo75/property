<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realtor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','address', 'email', 'contact_number','image'

    ];


    public function listing(){

        return $this->hasOne(Listing::class);
    }

    public function som(){

        return $this->hasOne(Som::class);
    }
}
