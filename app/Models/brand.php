<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'brand_name',
        'brand_description',
        'brand_logo',
    ];
}