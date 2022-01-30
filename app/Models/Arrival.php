<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrival extends Model
{
    use HasFactory;
    protected $fillable = [
        'arrival_image',
        'arrival_heading',
        'arrival_description',
    ];
}
