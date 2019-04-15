<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    //
    protected $fillable =[
        'title',
        'text',
        'date'
    ];
    
    public function getUpdatedAtAttribute($date) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

    public function getAllArticles(){
        $data = $this->orderBy('updated_at', "DESC")->get();
        return $data;
    }
    public function getArticlesById($id){
        $data = $this->where('id', '=', $id)->get();
        return $data;
    }
}
