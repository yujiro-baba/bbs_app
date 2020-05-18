<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    public $timestamps = false;

    public function writes()
    {
        return $this->hasMany('App\Write');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getFormattedPostTimeAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['post_time'])
            ->format('Y/m/d');
    }
}
