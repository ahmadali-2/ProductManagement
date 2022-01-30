<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroOverlay extends Model
{
    use HasFactory;
    protected $fillable = [
        'hO_silverHeading',
        'hO_heading',
        'hO_description'
    ];
}
