<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests;

class ArticlesController extends Controller
{
    //
    
    public function index(Article $article){
        $data = $article->all();
        //dd($data);
        return view('pages.view.articles', ['data' => $data]);
    }
    
    public function create(){
        return view('pages.edit.article');
    }
    
    public function store(Article $article, Request $request){
     $data = $article->create($request->all());    
     return redirect('admin/articles');
    }
    
    public function edit($id){
        $data = Article::find($id);
        //dd($data);
        return view('pages.edit.articleedit', ['data' => $data]);
    }
    
    public function update(Request $request, $id){
        $data = Article::find($id);
        $data->title = $request->title;
        $data->text = $request->text;
        $data->date = $request->date;
        $data->save();
        return redirect('admin/articles');
    }

        public function delete($id){
        $data = Article::find($id);
        $data->delete();
        return redirect()->back();
    }
}
