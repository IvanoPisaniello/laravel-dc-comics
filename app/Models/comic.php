<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comic extends Model
{
    use HasFactory;

    public function getArtistsAttribute($value)
    {
        return json_decode($value, true);
    }


    public function setArtistsAttribute($value)
    {
        $this->attributes['artists'] = json_encode($value);
    }


    public function getWritersAttribute($value)
    {
        return json_decode($value, true);
    }


    public function setWritersAttribute($value)
    {
        $this->attributes['writers'] = json_encode($value);
    }
}
