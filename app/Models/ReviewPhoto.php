<?php

namespace App\Models
;

use Illuminate\Database\Eloquent\Model;

class ReviewPhoto extends Model
{
    //
    public function review(){
        return $this->belongsTo('App\Models\Review');
    }
}
