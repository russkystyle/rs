@extends('admin')
@section('content')
<h3><a href="{{url('news')}}">Назад к новостям</a></h3>
@foreach($data as $news)
{!! Form::open(['url' => 'news/update']) !!}
<div class="form-group">
    {!! Form::label('title', 'Название фото') !!}
    {!! Form::text('title', $news->title, ['class' => 'form-control', 'id' => 'title']) !!}
</div>
<div class="form-group">
    {!! Form::label('title', 'Название фото') !!}
    {!! Form::text('title', $news->text, ['class' => 'form-control', 'id' => 'title']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Изменить', ['class' => 'form-control']) !!}
</div>
{!! Form::close() !!}
@endforeach
@foreach($photo as $photo)
<img src="{{asset($photo->preload_path)}}">
<p><a href="{{url('photonews/' . $photo->id . '/delete')}}">Удалить</a></p>
@endforeach
    <h2>Добавить фото</h2>
    {!! Form::open(['url' => 'photonews/store', 'enctype' => 'multipart/form-data']) !!}
    {!! Form::hidden('news_album_id', $news->id) !!}
<div class="form-group">
    {!! Form::label('title', 'Название фото') !!}
    {!! Form::text('title', '', ['class' => 'form-control', 'id' => 'title']) !!}
</div>
<div class="form-group">
    {!! Form::label('photo', 'Название фото') !!}
    {!! Form::file('photo', '', ['class' => 'form-control', 'id' => 'photo']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Описание фото') !!}
    {!! Form::text('description', '', ['class' => 'form-control', 'id' => 'desc']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Создать', ['class' => 'form-control']) !!}
</div>
{!! Form::close() !!}
@stop
