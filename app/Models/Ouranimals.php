<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ouranimals extends Model
{
    use HasFactory;

    protected $fillable = [
        'image' ,
        'color' ,
        'breed' ,
        'location',
        'AnimalType' 
    ];
}