<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'hero_name',
        'hero_description',
        'hero_logo',
    ]; 
}
