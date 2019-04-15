<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhotoAlbum extends Model
{
    use SoftDeletes;
    //
    protected $fillable =[
        'ref',
        'title',
        'description',
        'metatitle',
        'metakey',
        'metadesc',
        'metacenonical',
        'deleted_at',
        'created_at',
        'deleted_at'
    ];

    public function photo(){
        return $this->hasMany(\App\Photo::class, 'photoalbums_id', 'id');
    }

    public function album($ref){
        return $this->where('ref', '=', $ref)->get();
    }
}
