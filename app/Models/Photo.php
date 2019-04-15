<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = [
        'photo_album_id',
        'title',
        'path',
        'alt',
        'description',
        'date'
    ];

    public function getById($id) {
        $data = $this->where('id', '=', $id)->get();
        return $data;
    }
    public function getByAlbumId($id){
        $data = $this->where('photo_album_id', '=', $id)->get();
        return $data;
    }

    /**
     *This belongs to PhotoAlbum
     */
    public function photoalbum(){
       return $this->belongsTo('App\Models\PhotoAlbum');
    }


}
