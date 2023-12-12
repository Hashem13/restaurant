<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'time', 'name', 'phone', 'total_person', 'isApproved', 'created_by'];

    

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
