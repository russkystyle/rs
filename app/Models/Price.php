<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    //
    protected $fillable = [
        'room',
        'period',
        'price'
    ];
    
    public function getAllPrices(){
        $data = $this->get();
        return $data;
    }
}
