<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comic extends Model
{
    use HasFactory;


    protected $casts = [
        'artists' => 'array',
        "writers" => "array"
    ];
}
