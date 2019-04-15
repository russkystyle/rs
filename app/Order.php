<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    //
    protected $fillable =[
        'name',
        'phone',
        'email',
        'comment',
        'prices_id'
    ];
}
