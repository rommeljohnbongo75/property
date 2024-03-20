<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'contact_number','description','listing_id','user_id','start','children','adults','start_date','end_date'

    ];


    public function listing(){
        return $this->belongsTo(Listing::class,'listing_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function listingGet()
    {
        return $this->hasOne(Listing::class,'listing_id','id');
    }
}
