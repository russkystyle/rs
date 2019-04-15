<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoNews extends Model
{
    //
    protected $fillable = [
        'news_album_id',
        'title',
        'path',
        'preload_path',
        'description'
    ];
    
    public function getAllNewsPhotos (){
        $data = $this->get();
        return $data;
    }

    public function news(){
        return $this->belongsTo('App\Models\News', 'news_album_id', 'id');
    }
}
