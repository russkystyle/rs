<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pages extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'ref',
        'title',
        'metatitle',
        'metakey',
        'metadesc',
        'metacanonical',
        'nofollow',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
