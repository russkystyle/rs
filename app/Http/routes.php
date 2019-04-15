<?php
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::resource('main', 'MainController');
//Route::post('test', ['uses' => 'MainController@test', 'as' => 'test']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/', ['as' => 'index', 'uses' => 'MainController@index']);
    Route::get('servises', ['as' => 'servises', 'uses' => 'MainController@servises']);
    Route::get('about', ['as' => 'about', 'uses' => 'MainController@about']);
    Route::get('galery', ['as' => 'galery', 'uses' => 'MainController@galery']);
    Route::get('galery/{id}', ['as' => 'galery/{id}', 'uses' => 'MainController@album']);
    Route::get('reviews', ['as' => 'reviews', 'uses' => 'MainController@reviews']);
    Route::get('articles', ['as' => 'articles', 'uses' => 'MainController@articles']);
    Route::get('articles/{id}', ['as' => 'articles/{id}', 'uses' => 'MainController@articleshow']);
    Route::get('contacts', ['as' => 'contacts', 'uses' => 'MainController@contacts']);
    Route::post('review/store', ['as' => 'review/store', 'uses' => 'ReviewsController@store']);
    Route::get('news/{id}', ['as' => 'news/{id}', 'uses' => 'NewsController@show']);
    Route::any('send', ['uses' => 'SendMailController@send', 'as' => 'send']);
    Route::get('servises/comfortliving', function(){
        return view('pages.servises.comfortliving');
    });
    Route::get('servises/controll', function(){
        return view('pages.servises.controll');
    });
    Route::get('servises/gygiene', function(){
        return view('pages.servises.gygiene');
    });
    Route::get('servises/adaptation', function(){
        return view('pages.servises.adaptation');
    });
    Route::get('servises/meal', function(){
        return view('pages.servises.meal');
    });
    Route::get('servises/leisure', function(){
        return view('pages.servises.leisure');
    });
    Route::get('sitemap', function (){
        $sitemap = App::make("sitemap");
        //$sitemap->setCache('laravel.sitemap', 60);
        $now = Carbon::now();
        
            $sitemap->add(URL::to('/'), $now, '1.0', 'daily');
            $sitemap->add(URL::to('servises'), $now, '1.0', 'daily');
            $sitemap->add(URL::to('about'), $now, '1.0', 'daily');
            $sitemap->add(URL::to('galery'), $now, '1.0', 'daily');
            $sitemap->add(URL::to('reviews'), $now, '1.0', 'daily');
            $sitemap->add(URL::to('articles'), $now, '1.0', 'daily');
            $sitemap->add(URL::to('contacts'), $now, '1.0', 'daily');
        
        $news = DB::table('news')->orderBy('created_at', 'desc')->get();
        foreach ($news as $new){
            $sitemap->add(URL::to('news/' . $new->id), $new->updated_at, '0.8', 'daily');
        }
        $articles = DB::table('articles')->orderBy('created_at', 'desc')->get();
        foreach ($articles as $article){
            $sitemap->add(URL::to('articles/' . $article->id), $article->updated_at, '0.8', 'daily');
        }
        $photoAlbums = DB::table('photos')->orderBy('updated_at', 'desc')->get();
        foreach ($photoAlbums as $photos){
            $sitemap->add(URL::to('galery/' . $photos->id), $now, '0.7', 'monthly');
        }
        return $sitemap->render('xml');
    });
    Route::get('/home', 'HomeController@index');
    Route::auth();
});

Route::group(['middleware' => 'web'], function () {
   
    Route::get('/admin', ['as' => '/admin', 'middleware' => 'auth', 'uses' => 'MainController@admin']);
    Route::get('page/{id}/edit', ['as' => 'page/{id}/edit', 'middleware' => 'auth', 'uses' => 'MainController@editpage']);
    Route::put('page/{id}/store', ['as' => 'page/{id}/store', 'middleware' => 'auth', 'uses' => 'MainController@pageStore']);
    Route::post('photo/store', ['as' => 'photo/store', 'middleware' => 'auth', 'uses' => 'PhotoController@store']);
    Route::get('photo/{id}/edit', ['as' => 'photo/{id}/edit', 'middleware' => 'auth', 'uses' => 'PhotoController@edit']);
    Route::post('photo/{id}/update', ['as' => 'photo/{id}/update', 'middleware' => 'auth', 'uses' => 'PhotoController@update']);
    Route::get('photo/{id}', ['as' => 'photo/{id}', 'middleware' => 'auth', 'uses' => 'PhotoController@destroy']);
    Route::get('news', ['as' => 'news', 'uses' => 'NewsController@news']);
    Route::get('news/{id}', ['as' => 'news/{id}', 'uses' => 'NewsController@show']);
    Route::get('news/create', ['as' => 'news/create', 'middleware' => 'auth', 'uses' => 'NewsController@create']);
    Route::post('news/store', ['as' => 'news/store', 'middleware' => 'auth', 'uses' => 'NewsController@store']);
    Route::get('news/{id}/delete', ['as' => 'news/{id}/delete', 'middleware' => 'auth', 'uses' => 'NewsController@delete']);
    Route::get('news/{id}/edit', ['as' => 'news/{id}/edit', 'middleware' => 'auth', 'uses' => 'NewsController@edit']);
    Route::get('photonews/create', ['as' => 'photonews/create', 'middleware' => 'auth', 'uses' => 'PhotoNewsController@create']);
    Route::post('photonews/store', ['as' => 'photonews/store', 'middleware' => 'auth', 'uses' => 'PhotoNewsController@store']);
    Route::get('photonews/{id}/delete', ['as' => 'photonews/{id}/delete', 'middleware' => 'auth', 'uses' => 'PhotoNewsController@delete']);
    Route::get('prices/edit', ['as' => 'prices/edit', 'middleware' => 'auth', 'uses' => 'MainController@editPrice']);
    Route::post('prices/store/{id}', ['as' => 'prices/store{id}', 'middleware' => 'auth', 'uses' => 'MainController@storePrice']);
    
    Route::get('admin/articles', ['as' => 'admin/articles', 'middleware' => 'auth', 'uses' => 'ArticlesController@index']);
    Route::get('admin/articles/create', ['as' => 'admin/articles/create', 'middleware' => 'auth', 'uses' => 'ArticlesController@create']);
    Route::post('admin/articles/store', ['as' => 'admin/articles/store', 'middleware' => 'auth', 'uses' => 'ArticlesController@store']);
    Route::get('admin/articles/{id}/delete', ['as' => 'admin/articles/{id}/delete', 'middleware' => 'auth', 'uses' => 'ArticlesController@delete']);
    Route::get('admin/articles/{id}/edit', ['as' => 'admin/articles/{id}/edit', 'middleware' => 'auth', 'uses' => 'ArticlesController@edit']);
    Route::post('admin/articles/{id}/update', ['as' => 'admin/articles/{id}/update', 'middleware' => 'auth', 'uses' => 'ArticlesController@update']);
    Route::get('review/show', ['as' => 'review/show', 'middleware' => 'auth', 'uses' => 'ReviewsController@show']);
    Route::post('review/{id}/edit', ['as' => 'review/{id}/edit', 'middleware' => 'auth', 'uses' => 'ReviewsController@edit']);
    //Route::get('photonews/edit', ['as' => 'photonews/create', 'uses' => 'PhotoNewsController@create']);
    
    //Route::resource('photo', 'PhotoController');
    Route::resource('album', 'PhotoAlbumController');
});
