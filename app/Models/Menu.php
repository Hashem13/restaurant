<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    
    protected $table = 'menu';

    protected $fillable = [
        'name',
        'category',
        'price',
        'description',
        'image_path',
        'is_house_special',
        'created_by',
        'is_available',
    ];
}
