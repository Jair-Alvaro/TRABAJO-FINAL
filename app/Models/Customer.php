<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function Bookings(){
        return $this->hasMany(Booking::class);
    }
    protected $connection = 'mongodb';
}
