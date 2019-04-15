<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoAlbum;
use App\Models\Photo;
use App\Functions\Main;
use App\Http\Requests;

class PhotoAlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PhotoAlbum $photoAlbum)
    {
        //
        $data = $photoAlbum->getAllAlbums();
        //dd($data);
        return view('pages.view.albums', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PhotoAlbum $photoAlbum)
    {
        //
       
        return view('pages.design.create_album');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Main $main, PhotoAlbum $photoAlbum)
    {
        //
        $data = $photoAlbum->create($request->all());
        $base_folder = 'img/albums/';
        $name = $request->get('name');
        $name = $main->createImgFolder($name, $base_folder);
        $data->path = $name['base_folder'];
        $data->shortcut_path = $name['shortcut'];
        $data->preload_path = $name['preload'];
        $album_id = $data->id;
        $alb_name = $data->name;
        //dd($alb_name);
        $data->save();
        return redirect('album');
//        return view('pages.view.album', [
//            'photo_album_id' => $album_id,
//            'name' => $alb_name,
//            ]);
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
        //$test = $photoAlbum->getPhotosById($id);
        $data = PhotoAlbum::find($id)->photo;
        //dd($data);
        $name = PhotoAlbum::find($id)->name;
        $link = PhotoAlbum::find($id)->id;
        return view('pages.view.album', [
            'data' => $data,
            'photo_album_id' => $id,
            'name' => $name,
            'link' => $link,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, PhotoAlbum $photoalbum)
    {
        //
        
        
        $data = $photoalbum->getById($id);
        
        $photos = PhotoAlbum::find($id)->photo;
        //dd($photos);
        return view('pages.edit.albumedit', [
            'data' => $data,
            'photos' => $photos,
            ]);
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
        $data = PhotoAlbum::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->date = $request->date;
        //dd($data);
        $data->save();
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
