@extends('admin')
@section('content')
    
     @foreach($data as $photoAlbum)
     <h3><a href="{{url('album/' . $photoAlbum->id)}}">Назад к альбому</a></h3>
    <h1>{{$photoAlbum->name}}</h1>
        {!! Form::open(['url' => 'album/' . $photoAlbum->id, 'method' => 'put', 'enctype' => 'multipart/form-data'])!!}
            <div class="form-group">
                {!! Form::label('name', 'Название альбома') !!}
                {!! Form::text('name', $photoAlbum->name, ['class' => 'form-control', 'id' => 'album_name']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Описание альбома') !!}
                {!! Form::textarea('description', $photoAlbum->description, ['class' => 'form-control', 'id' => 'album_description']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('date', 'Дата создания') !!}
                {!! Form::text('date', $photoAlbum->date, ['class' => 'form-control', 'id' => 'album_date']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('published', 'Опубликован') !!}
                {!! Form::checkbox('published', $photoAlbum->published, ['class' => 'form-control', 'id' => 'album_published']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Сохранить', ['class' => 'form-control']) !!}
            </div>
        {!! Form::close() !!}
     @endforeach
     @foreach($photos as $photo)
        <div class="album_img">
               <img src="{{asset($photo->preload_path)}}" alt="">
               <a href="{{asset($photo->path)}}">
               <div class="album_img_hover"></div>
                 <div class="album_img_text">
                     <p><a href="{{url('photo/' . $photo->id . '/edit')}}">Редактировать</a>&nbsp;&nbsp;
                         <a href="{{url('photo/' . $photo->id)}}">Удалить</a></p>
<!--                     Use action via Controller for delete-->
                     <p>{{$photo->description}}<span><br><img src="{{asset('img/servises/photo-folow.png')}}" alt=""></span></p>
                 </div>
               </a>
            </div>
     @endforeach

@stop

