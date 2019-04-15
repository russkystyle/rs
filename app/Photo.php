<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'ref',
        'title',
        'alt',
        'photo',
        'thumb',
        'deleted_at',
        'created_at',
        'updated_at',
        'photoalbums_id'
    ];

    public function photoAlbums(){
        return $this->belongsTo(\App\PhotoAlbum::class, 'photoalbums_id');
    }

    public function photos($id){
        return $this->where('photoalbums_id', '=', $id)->get();
    }
}
