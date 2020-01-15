<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function serials()
    {
        return $this->hasMany(Serial::class);
    }
}
