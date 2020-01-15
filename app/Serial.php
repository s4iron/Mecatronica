<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
