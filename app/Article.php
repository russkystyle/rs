<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'ref',
        'title',
        'description',
        'photo',
        'metatitle',
        'metadesc',
        'metakey',
        'metacanonical',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
