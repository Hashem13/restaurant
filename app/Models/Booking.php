<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'time', 'name', 'phone', 'total_person'];

    // If you have a different table name or primary key
    // protected $table = 'bookings';
    // protected $primaryKey = 'id';

    // Define any relationships or additional logic here if needed
}
