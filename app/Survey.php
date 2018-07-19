<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    public function users()
        {
            return $this->belongsTo(Surveys::class);
        }
}
