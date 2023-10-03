<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comic extends Model
{
    use HasFactory;

    // protected $casts = [
    //     'artists' => 'array',
    //     'writers' => 'array'
    // ];

    public function setArtistsAttribute($value)
    {
        $this->attributes['artists'] = json_encode($value);
    }
    public function setWritersAttribute($value)
    {
        $this->attributes['writers'] = json_encode($value);
    }

    protected $fillable = [
        "title",
        "description",
        "thumb",
        "price",
        "series",
        "sale_date",
        "type",
        "artists",
        "writers"
    ];
}
