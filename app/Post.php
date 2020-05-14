<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;

    public function writes()
    {
        return $this->hasMany('App\Write');
    }
}
