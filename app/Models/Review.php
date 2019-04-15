<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
        'slug',
        'name',
        'email',
        'phone',
        'message',
        'published'
    ];
    
    public function photo (){
        return $this->hasMany('App\Models\ReviewPhoto');
    }
    
    public function getAll(){
        $data = $this->orderBy('updated_at', 'DESC')->get();
        return $data;
    }
    
    public function getPublished(){
        $data = $this->where('published', '=', 1)->orderBy('updated_at', 'DESC')->get();
        return $data;
    }
}
