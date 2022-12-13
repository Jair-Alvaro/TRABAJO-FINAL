<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public function Room(){
        return $this->belongsTo(Room::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    protected $connection = 'mongodb';
}
