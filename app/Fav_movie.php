<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fav_movie extends Model
{
    protected $fillable = [
        'user_id','name','details', 'casts','image_link','quote','trailers'
    ];
    public function getShortContentAttribute()
    {
        return substr($this->details, 0, 40) .'.... ';
    }
}
