<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'ref',
        'title',
        'photo',
        'description',
        'metatitle',
        'metakey',
        'metadesc',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
}
