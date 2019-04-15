<?php

namespace App\Models;
use Carbon\Carbon;
use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable = [
        'title',
        'text',
        'date'
    ];
    
    public function getCreatedAtAttribute($date){
        Date::setLocale('ru');
        return Date::createFromFormat('Y-m-d H:i:s', $date)->format('j F Y');
    }

    public function getAllNews(){
        $data = $this->orderBy('updated_at', 'DESC')->paginate(5);
        return $data;
    }
    
    public function getNewsById($id){
        $data = $this->where('id', '=', $id)->get();
        return $data;
    }
    /**
     * This has many photos from photos
     */    
    public function photos(){
       return $this->hasMany('App\Models\PhotoNews', 'news_album_id');
    }
}
