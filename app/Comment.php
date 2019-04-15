<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    //
    protected $fillable =[
        'ref',
        'title',
        'description',
        'media',
        'thumb',
        'name',
        'email',
        'phone',
        'metatitle',
        'metakey',
        'metadesc',
        'metacanonical',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
