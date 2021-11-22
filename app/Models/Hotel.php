<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hotels';

    protected $fillable = [
        'name', 
        'address', 
        'supplier',
        'star', 
        'status'
    ];

    public function hotelsReviews()
    {
        return $this->hasMany(HotelReview::class);
    }
}
