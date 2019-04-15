<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\PhotoAlbum;
use App\Servises;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use App\Price;
use App\MainPhotoAlbum;
use App\Photo;
use App\News;
use App\Pages;
use Validator;

//use Illuminate\Routing\Controller as BaseController;
//use Illuminate\Foundation\Validation\ValidatesRequests;


class PagesController extends Controller
{
    //use DispatchesJobs, ValidatesRequests;

    //
    public function mainPage(){
        $data = Pages::where('title', '=', 'main')->get();
        //dd($data);
        if ($data->isEmpty()){
            abort(404);
        } else {
        $head = $this->getHead($data);
        $mainPhotos = MainPhotoAlbum::all();
        $photoAlbums = PhotoAlbum::orderBy('created_at', 'desc')->take(4)->get();
        //dd($photoAlbums);
        $news = News::orderBy('created_at', 'desc')->take(3)->get();

        return view('pages.main', [
            'head' => $head,
            'main' => $mainPhotos,
            'albums' => $photoAlbums,
            'news' => $news
        ]);
        }
    }

    public function servises(){
        $data = Pages::where('title', '=', 'servises')->get();
        if ($data->isEmpty()){
            abort(404);
        }
        $head = $this->getHead($data);
        $servises = Servises::all();
        $price = Price::all();
        return view('pages.servises', [
            'head' => $head,
            'servises' => $servises,
            'price' => $price
        ]);
    }

    public function servise($ref){
        $data = Servises::where('ref', '=', $ref)->get();
        if ($data->isEmpty()){
            abort(404);
        }
        $head = $this->getHead($data);
        $news = News::orderBy('created_at', 'desc')->take(5)->get();
        $servises = Servises::all();
        return view('pages.servise', [
            'head' => $head,
            'servise' => $data,
            'news' => $news,
            'servises' => $servises,
        ]);
    }

    public function about(){
        $data = Pages::where('title', '=', 'about')->get();
        if ($data->isEmpty()){
            abort(404);
        }
        $head = $this->getHead($data);
        return view('pages.about', [
            'head' => $head
        ]);
    }

    public function albums(){
        $data = Pages::where('title', '=', 'albums')->get();
        if ($data->isEmpty()){
            abort(404);
        }
        $head = $this->getHead($data);
        $albums = PhotoAlbum::all();
        
        return view('pages.photo_album', [
            'head' => $head,
            'albums' => $albums
        ]);
    }

    public function album($ref, PhotoAlbum $photoAlbum, Photo $photo){
        $albums = $photoAlbum->album($ref);
        if ($albums->isEmpty()){
            abort(404);
        }
        $head = $this->getHead($albums);
        $photo = $photo->photos($albums[0]['id']);
        return view('pages.album', [
            'head' => $head,
            'album' => $albums,
            'photo' => $photo
        ]);
    }

    public function comments(Comment $comment, News $news){
        $data = Pages::where('title', '=', 'comments')->get();
        if ($data->isEmpty()){
            abort(404);
        }
        $head = $this->getHead($data);
        $comments = $comment->orderBy('created_at', 'desc')->where('published', '=', 1)->paginate(5);
        $p_news = $news->orderBy('created_at', 'desc')->paginate(7);
        return view('pages.comments', [
            'head' => $head,
            'comments' => $comments,
            'news' => $p_news
        ]);
    }

    public function articles(Article $article, News $news){
        $data = Pages::where('title', '=', 'articles')->orderBy('created_at', 'desc')->get();
        if ($data->isEmpty()){
            abort(404);
        }
        $head = $this->getHead($data);
        $articles = $article->orderBy('created_at', 'desc')->paginate(7);
        $p_news = $news->orderBy('created_at', 'desc')->paginate(5);

        return view('pages.articles', [
            'head' => $head,
            'articles' => $articles,
            'news' => $p_news
        ]);
    }

    public function article($ref, News $news){
        $data = Article::where('ref', '=', $ref)->get();
        if ($data->isEmpty()){
            abort(404);
        }
        $head = $this->getHead($data);
        $p_news = $news->orderBy('created_at', 'desc')->paginate(7);
        return view('pages.article', [
           'head' => $head,
            'article' => $data,
            'news' => $p_news
        ]);
    }

    public function contacts(){
        $data = Pages::where('title', '=', 'contacts')->get();
        $head = $this->getHead($data);
        return view('pages.contacts', [
            'head' => $head
        ]);
    }

    public function news(){
        $data = Pages::where('title', '=', 'news')->get();
//        dd($data);
        if ($data->isEmpty()){
            abort(404);
        }
        $head = $this->getHead($data);
        //dd($head);
        $news = News::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.news', [
           'head' => $head,
            'news' => $news
        ]);
    }

    public function new($ref){
        $data = News::where('ref', '=', $ref)->get();
        if ($data->isEmpty()){
            abort(404);
        }
        $head = $this->getHead($data);
        $news = News::paginate(4);
        return view('pages.news_one', [
            'head' => $head,
            'data' => $data,
            'news' => $news
        ]);
    }

    public function getHead($data){
        if (!count($data)){
            return $data = '';
        } else {
        foreach ($data as $value){
            $head['metatitle'] = $value->metatitle;
            $head['metakey'] = $value->metakey;
            $head['metadesc'] = $value->metadesc;
            $head['metacanonical'] = $value->metacanonical;
            $head['nofollow'] = $value->nofollow;
        }
        return $head;
        }
    }

    public function sendcomment(Request $request){
        $validator = Validator::make($request->all(), [
           'name' => 'required|min:3',
            'phone' => 'min:7',
            'email' => 'required|email',
            'description' => 'required|min:20'
        ]);

        if ($validator->fails()){
            return redirect('/comments')->withErrors($validator, 'err_mesage')->withInput();
        } else{
            $data = Comment::create($request->all());
            return redirect()->back()->with('message', 'Ваш отзыв успешно отправлен');
        }

    }

    public function terms(){
        $head['metatitle'] = 'Условия проживания | Русский Стиль';
        $head['metakey'] = '';
        $head['metadesc'] = 'Условия проживания и питания в  пансионате · Интересный досуг · Специализированный уход ·Звоните!';
        $head['metacanonical'] = '';
        $head['nofollow'] = 0;
        return view('pages.uslovia_prozhivania', ['head' => $head]);
    }

    public function rewards(){
        $head['metatitle'] = 'Грамоты | Русский Стиль';
        $head['metakey'] = '';
        $head['metadesc'] = 'Грамоты пансионата «Русский Стиль»';
        $head['metacanonical'] = '';
        $head['nofollow'] = 0;
        return view('pages.rewards', ['head' => $head]);
    }

    public function rooms(){
        $head['metatitle'] = 'Номера для постояльцев в пансионате «Русский Стиль»';
        $head['metakey'] = '';
        $head['metadesc'] = 'Уютные номера для постояльцев пансионата «Русский Стиль».Присутствует система скидок при снятии номера более чем на 30 дней.';
        $head['metacanonical'] = '';
        $head['nofollow'] = 0;
        return view('pages.rooms', ['head' => $head]);
    }

    public function voprosOtvet(){
        $head['metatitle'] = 'Вопрос-Ответ| Русский стиль';
        $head['metakey'] = '';
        $head['metadesc'] = 'Вопросы к сотрудникам пансионата и ответы на них';
        $head['metacanonical'] = '';
        $head['nofollow'] = 0;

        return view('pages.vopros_otvet', ['head' => $head]);
    }

//    public function changeData(){
//        $data_old = \DB::table('photos_old')->get();
//        //dd($data_old);
//        foreach ($data_old as $item){
//            $data = new Photo;
//            $data->title = $item->title;
//            $data->alt = $item->alt;
//            $data->photo = $item->path;
//            $data->thumb = $item->preload_path;
//            //$data->email = $item->email;
//            //$data->media = $item->path;
//            //$data->published = $item->published;
//            $data->photoalbums_id = $item->photo_album_id;
//            $data->created_at = $item->created_at;
//            $data->updated_at = $item->updated_at;
//            $data->save();
//        }
//
//    }

//    public function changeData(){
//        $data_old = \DB::table('photo_albums_old')->get();
//        //dd($data_old);
//        foreach ($data_old as $item){
//            $data = new PhotoAlbum;
//            $data->title = $item->name;
//            $data->description = $item->description;
//            //$data->photo = $item->path;
//            //$data->thumb = $item->preload_path;
//            //$data->email = $item->email;
//            //$data->media = $item->path;
//            //$data->published = $item->published;
//            //$data->photoalbums_id = $item->photo_album_id;
//            $data->created_at = $item->created_at;
//            $data->updated_at = $item->updated_at;
//            $data->save();
//        }
//
//    }
}
