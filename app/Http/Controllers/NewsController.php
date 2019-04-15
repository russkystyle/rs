<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoNews;
use App\Models\News;
use App\Functions\Main;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;

class NewsController extends Controller
{
    //
    public function news(News $news, PhotoNews $photo){
        $data = $news->getAllNews();

        $list = [];
        foreach ($data as $new){
            $list[] = [
                'id' => $new->id,
                'title' => $new->title,
                'text' => $new->text,
                'date' => $new->date,
                'photo' => PhotoNews::where('news_album_id', '=', $new->id)->first()
                ];
        }

        //dd($list);
        return view('pages.view.news', ['data' => $list]);
    }
    
    public function show($id, News $news){
        $datas = $news->getAllNews();
        
        $one = $news->getNewsById($id);
        //$test = $one->title;
        //dd($data, $one, $text);
        return view('pages.news', ['datas' => $datas, 'first' => $one]);
    }

        public function create(News $news, Request $request){
        return view('pages.edit.news');
    }
    
    public function store(News $news, Request $request, Main $main){
        $data = $news->create($request->all());
        $id = $data->id;
        $title = $data->title;
        $text = $data->text;
        $base_folder = 'img/news';
        $folder_name = $main->createImgFolder($id, $base_folder);
        $data->path = $folder_name['base_folder'];
        $data->preload_path = $folder_name['preload'];
        $data->short_cut = $folder_name['shortcut'];
        
        //dd($news_id);
        $data->save();
        return redirect('news');
//        return view('pages.edit.newsedit', [
//                    'id' => $id,
//                    'title' => $title,
//                    'text' => $text
//            ]);
    }
    
    public function edit($id, News $news){
        $data = $news->getNewsById($id);
        $photo = PhotoNews::where('news_album_id', '=', $id)->get();
        //dd($photo);
        return view('pages.edit.newsedit', ['data' => $data, 'photo' => $photo]);
    }
    
    public function update(){
        
    }
    
//    public function newsPhotoStore(PhotoNews $photos, Request $request, News $news) {
//        $data = $photos->create($request->all());
//        
//        $path = $news->where('id', '=', $data->news_album_id)->get();
//        
//    }

        public function delete($id){
        $data = News::find($id);
        $data->delete();
        return redirect()->back();
    }
}
