<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoNews;
use App\Functions\Main;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use App\Http\Requests;

class PhotoNewsController extends Controller
{
    //
    public function newsPhoto(){
        
    }
    
    public function create(){
        //$news_id = \Session::get();
        return view('pages.view.photonews');
    }
    public function store(Request $request, PhotoNews $photonews){
        $data = $photonews->create($request->all());
        //dd($data);
        $path = 'img/news';
        //getting original file from request
        $origin = $request->file('photo')->getClientOriginalName();
        //saving original photo
        $this->saveFile($path, $origin, 800);
        $data->path = $path . '/' . $origin;
        //saving preload photo
        $this->saveFile($path, 'mid_' . $origin, 300, 200);
        $data->preload_path = $path . '/' . 'mid_' . $origin;
        //dd($data);
        $data->save();
        return redirect()->back();
            
    }
    private function saveFile($path, $file, $width, $height = null){
            $new_path = $path . '/' . $file;
            if($height === null) {
            $img = Image::make(Input::file('photo'))->resize(800, null, function ($costraint){
            $costraint->aspectRatio();                
            })->save($new_path);
            } else {
             $img = Image::make(Input::file('photo'))->resize($width, $height)->save($new_path);
             }
        }
    public function edit(){
        
    }
    public function update(){
        
    }
    public function delete($id){
        $data = PhotoNews::find($id);
        $data->delete();
        return redirect()->back();
    }
}
