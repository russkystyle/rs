<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use App\Models\Price;
use App\Models\Review;
use App\Models\PhotoNews;
use App\Models\News;
use App\Models\Photo;
use App\Models\Page;
use App\Models\Article;
use App\Models\PhotoAlbum;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /* 
     * return main page
     */
    public function index(Page $pages, PhotoAlbum $photoalbum)
    {
        //
        $data = $pages->mainPage();
        $dat = $data->toArray();
        $photo = $photoalbum->getAllAlbums();
        //Get photos & PhotoAlbum
        $list = [];
        foreach ($photo as $photos){
            $list[] = [
                'id' => $photos->id,
                'photo' => Photo::where('photo_album_id', '=', $photos->id)->first()
            ];
            
        }
        //Get news
        $news = News::orderBy('id', 'DESC')->take(3)->get();
        $news_list = [];
        foreach ($news as $new){
            $news_list[] = [
                'id' => $new->id,
                'title' => $new->title,
                'text' => $new->text,
                'date' => $new->created_at,
                'photo' => PhotoNews::where('news_album_id', '=', $new->id)->first()
                ];
        }
       
        //Get headers
        $headers = [
            'title' => $dat['0']['title'],
            'description' => $dat['0']['description'],
            'keywords' => $dat['0']['keywords']
        ];
 
        return view('pages.main', ['data' => $data, 'list' => $list, 'news' => $news_list])->with($headers);
    }
    
    public function servises(Page $pages){
        $data = $pages->getBySlug('servises');
        //dd($data);
        $price = Price::all();
        //dd($price);
        if($data){
        $dat = $data->toArray();
        $headers = [
            'title' => $dat['0']['title'],
            'description' => $dat['0']['description'],
            'keywords' => $dat['0']['keywords']
        ];
        }
        return view('pages.servises', ['data' => $data, 'price' => $price])->with($headers);
    }
    public function about(Page $pages) {
        $data = $pages->getBySlug('about');
        $dat = $data->toArray();
        $headers = [
            'title' => $dat['0']['title'],
            'description' => $dat['0']['description'],
            'keywords' => $dat['0']['keywords']
        ];
        return view('pages.about', ['data' => $data])->with($headers);
    }
    public function galery(Page $pages, PhotoAlbum $photoalbum) {
        $data = $pages->getBySlug('galery');
        $dat = $data->toArray();
        //Get photos
        $photo = $photoalbum->getAllAlbums();
        $list = [];
        foreach ($photo as $new){
            $list[] = [
                'id' => $new->id,
                'name' => $new->name,
                'photo' => Photo::where('photo_album_id', '=', $new->id)->first()
                ];
        }
        //dd($list);
        $headers = [
            'title' => $dat['0']['title'],
            'description' => $dat['0']['description'],
            'keywords' => $dat['0']['keywords']
        ];
        return view('pages.galery', ['data' => $data, 'list' => $list])->with($headers);
    }
    
    public function album($id, Photo $photo){
        $album = PhotoAlbum::where('id', '=', $id)->get()->toArray();
        
        $data = $photo->getByAlbumId($id);
        //dd($data);
        return view('pages.album', ['album_name' => $album[0]['name'], 'data' => $data]);
    }

    public function reviews(Page $pages, Review $review) {
        $data = $pages->getBySlug('reviews');
        $dat = $data->toArray();
        $headers = [
            'title' => $dat['0']['title'],
            'description' => $dat['0']['description'],
            'keywords' => $dat['0']['keywords']
        ];
        //Get reviews
        $reviews = $review->getPublished();
        $news = News::orderBy('id', 'DESC')->take(3)->get();
        //dd($news);
        return view('pages.reviews', [
            'data' => $data,
            'reviews' => $reviews,
            'news' => $news
            ])->with($headers);
    }
    public function articles(Page $pages, Article $article) {
        $data = $pages->getBySlug('articles');
        $dat = $data->toArray();
        $headers = [
            'title' => $dat['0']['title'],
            'description' => $dat['0']['description'],
            'keywords' => $dat['0']['keywords']
        ];
        $articles = $article->getAllArticles();
        return view('pages.articles', ['data' => $data, 'articles' => $articles])->with($headers);
    }
    
    public function articleshow($id, Article $article){
        $data = $article->getArticlesById($id);
        return view('pages.article', ['data' => $data]);
    }

    public function contacts(Page $pages) {
        $data = $pages->getBySlug('contacts');
        $dat = $data->toArray();
        $headers = [
            'title' => $dat['0']['title'],
            'description' => $dat['0']['description'],
            'keywords' => $dat['0']['keywords']
        ];
        return view('pages.map', ['data' => $data])->with($headers);
    }

    public function admin(Page $page){
        $data = $page->getAllPages();
        //dd($data);
        return view('pages.edit.pagesview', ['data' => $data]);
    }
    
    public function editpage($id, Page $page){
        $data = $page->getById($id);
        //dd($data);
        return view('pages.edit.pageedit', ['data' => $data]);
    }
    public function pageStore($id, Request $request){
        $data = Page::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->keywords = $request->keywords;
        //dd($data);
        $data->save();
        return redirect('/admin');
    }
    
    
    public function editPrice(Price $price){
        $data = $price->getAllPrices();
        return view('pages.edit.prices', ['data' => $data]);
    }
    
    public function storePrice(Request $request, $id){
        $price = Price::find($id);
        $price->room = $request->room;
        $price->price_to_30 = $request->price_to_30;
        $price->price_up_30 = $request->price_up_30;
        $price->save();
        return redirect()->back();
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.design.create_page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->all();
        dd($request);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //$page = $page->getById($id);
        dd($id);
        return view('index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //$data = Page::getById($id);
        //$data = 1;
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
