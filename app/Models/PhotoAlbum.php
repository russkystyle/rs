<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoAlbum extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'date',
        'published',
    ];


    /**
     * This has many photos
     */
    public function photo(){
       return $this->hasMany('App\Models\Photo');
    }

    public function getAllAlbums(){
        $query = $this->all();
        return $query;
    }
    
    public function getPhotos(){
        $data = $this->photo()->firstorfail();
        return $data;
    }

    public function getById($id) {
        $data = $this->where('id', '=', $id)->get();
        return $data;
    }
    public function getPhotosById($id){
        $data = $this->find($id)->photo;
        return $data;
    }
}
