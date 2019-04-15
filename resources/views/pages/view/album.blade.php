@extends('admin')
@section('content')

    <div style="display:inline-block;">
        <h3><a href="{{url('album/' . $photo_album_id . '/edit')}}">Редактировать</a></h3>
        <h3><a href="{{url('album')}}">Назад к альбомам</a></h3>
        <h1>{{$name}}</h1>
        @if(isset($data)) 
        @foreach($data as $photo)

               <div class="album_img">
                   <img src="{{asset($photo->preload_path)}}" alt="">
                   <a href="{{asset($photo->path)}}">
                   <div class="album_img_hover"></div>
                     <div class="album_img_text">
                         <p>{{$photo->description}}<span><br><img src="{{asset('img/servises/photo-folow.png')}}" alt=""></span></p>
                     </div>
                   </a>
                </div>
         @endforeach
        @endif 
        <div class="album_img">
            <img src="{{asset('img/noimage.png')}}" alt="">
            <a href="">
            <div class="album_img_hover"></div>
              <div class="album_img_text">
                  <p>Добавить фото<span><br><img src="{{asset('img/servises/photo-folow.png')}}" alt=""></span></p>
              </div>
            </a>
         </div>
    </div>
     <h2>Добавить фото</h2>
        @include('pages.forms.photo_form') 
    
@stop


