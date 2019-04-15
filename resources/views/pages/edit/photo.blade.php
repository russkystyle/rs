@extends('admin')
@section('content')

    <h1>Редактирование фото</h1>
    
    @foreach($data as $photo)
    <h2><a href="{{url('album/' . $photo->photo_album_id . '/edit')}}">Вернуться</a></h2>
    {!! Form::open(['url' => 'photo/' . $photo->id . '/update', 'enctype' => 'multipart/form-data']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Название фото') !!}
        {!! Form::text('title', $photo->title, ['class' => 'form-control', 'id' => 'photo_title']) !!}
    </div>
    <div class="form-group">
        <img src="{{asset($photo->shortcut_path)}}">
        {!! Form::label('photo', 'Файл') !!}
        {!! Form::file('photo', '', ['class' => 'form-control', 'id' => 'photo_title', 'style' => 'background:$photo->shortcut_path']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('alt', 'Замещающий текст') !!}
        {!! Form::text('alt', $photo->alt, ['class' => 'form-control', 'id' => 'photo_alt']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Описание фото') !!}
        {!! Form::text('description', $photo->description, ['class' => 'form-control', 'id' => 'photo_description']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('date', 'Название фото') !!}
        {!! Form::text('date', $photo->date, ['class' => 'form-control', 'id' => 'photo_date']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Создать', ['class' => 'form-control']) !!}
    </div>
    @endforeach
    {!! Form::close() !!}

@stop

