<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class write extends Post
{
    public $timestamps = false;

    public function getFormattedWriteTimeAttribute()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['write_time'])
            ->format('Y/m/d H:i:s');
    }
}
