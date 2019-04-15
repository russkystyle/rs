<?php

namespace App\Http\Controllers {


    use Illuminate\Http\Request;
    use App\Functions\Main;
    use App\Http\Requests;
    use Illuminate\Support\Facades\Input;
    use App\Models\PhotoAlbum;
    use App\Models\Photo;
    use Illuminate\Support\Facades\Storage;
    use Intervention\Image\Facades\Image;
    use Intervention\Image\ImageManager;

    class PhotoController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
            return redirect('photo/create');
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create(PhotoAlbum $photoAlbum)
        {
            //
            $data = $photoAlbum->getAllAlbums();
            //dd($data);
            return view('pages.design.create_photo', ['data' => $data]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request, Photo $photo, PhotoAlbum $photoalbum)
        {
            //Photo create
            $data = $photo->create($request->all());
            //getting paths from album folders
            $paths = $photoalbum->where('id', '=', $data->photo_album_id)->firstorfail();
            //getting original file from request
            $origin = $request->file('photo')->getClientOriginalName();
            //saving original photo
            $this->saveFile($paths->path, $origin, 800);
            $data->path = $paths->path . $origin;
            
            //saving preload photo
            $this->saveFile($paths->preload_path, 'mid_' . $origin, 220, 220);
            $data->preload_path = $paths->preload_path . 'mid_' . $origin;
            //saving short cut photo
            $this->saveFile($paths->shortcut_path, 'min_' . $origin, 172, 172);
            $data->shortcut_path = $paths->shortcut_path . 'min_' . $origin;
            //dd($data);
            $data->save();
            return redirect('album/' . $data->photo_album_id);
        }
        /*
         * This save file $file to destination folder $path
         * With variable crop ratio $width & $height
         */
        private function saveFile($path, $file, $width, $height = null){
            $new_path = $path . $file;
            if($height === null) {
            $img = Image::make(Input::file('photo'))->resize(800, null, function ($costraint){
            $costraint->aspectRatio();                
            })->save($new_path);
            } else {
             $img = Image::make(Input::file('photo'))->resize($width, $height)->save($new_path);
             }
        }

                /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(PhotoAlbum $photoAlbum, $id)
        {
            //
            $data = $photoAlbum->getById($id);
            dd($data);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id, Photo $photo)
        {
            //
            $data = $photo->getById($id);
            //dd($data);
            return view('pages.edit.photo', ['data' => $data,]); 
            //dd($data);
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
            $data = Photo::find($id);
            $data->title = $request->title;
            $data->alt = $request->alt;
            $data->description = $request->description;
            $data->date = $request->date;
            //dd($data);
            $data->save();
            return redirect('album/' . $data->photo_album_id . '/edit');
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
            $data = Photo::find($id);
            $data->delete();
            return redirect('album/' . $data->photo_album_id . '/edit');
        }
    }
    }
