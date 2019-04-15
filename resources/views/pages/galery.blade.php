@extends('index')
@section('content')
    <div class="info2" style="display:inline-block;">
        <h1>Альбомы</h1>
        @foreach($list as $data)
           <div class="album_img">
                <img src="{{asset($data['photo']['preload_path'])}}" alt="">
                <a href="{{url('galery/' . $data['id'])}}">
                <div class="album_img_hover"></div>
                 <div class="album_img_text">
                     <p>{{$data['name']}}<span><br><img src="img/servises/photo-folow.png" alt=""></span></p>
                 </div>
                </a>
            </div>
        @endforeach
            
    </div>
@stop

