<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic_Answered extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
