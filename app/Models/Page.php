<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

    class Page extends Model
    {
        //

        protected $fillable = [
            'title',
            'description',
            'keywords',
        ];

        /**
         * Returns the first page of common
         */
        public function getAllPages(){
            $data = $this->get();
            return $data;
        }
        public function mainPage() {
            $data = $this->where('name', '=', 'main')->get();
            return $data;
        }
        public function getBySlug($slug){
            $data = $this->where('name', $slug)->get();
            return $data;
        }
        public function getById($id){
            $data = $this->where('id', '=', $id)->get();
            return $data;
        }

        /**
         *
         */
        public function photoAlbums() {
           return $this->hasMany('App\Models\PhotoAlbum');
        }
        public function news(){
           return $this->hasMany('App\Models\News');
        }
        public function article() {
           return $this->hasMany('App\Models\Article');
        }
        public function video() {
           return $this->hasMany('App\Models\Video');
        }

    }

