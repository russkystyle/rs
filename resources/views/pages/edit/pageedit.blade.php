@extends('admin')
@section('content')  
<h2><a href="{{url('admin')}}">Назад к списку страниц</a></h2>        
@foreach($data as $page)    
{!! Form::open(['url' => 'page/' . $page->id . '/store', 'method' => 'put' ]) !!}

<div class="form-group">
    {!! Form::label('title', 'Название страницы') !!}
    {!! Form::text('title', $page->title, ['class' => 'form-control', 'id' => 'name']) !!}
</div>

<div class="form-group">
    {!! Form::label('keywords', 'Ключевые слова') !!}
    {!! Form::text('keywords', $page->keywords, ['class' => 'form-control', 'id' => 'keywords']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Описание страницы') !!}
    {!! Form::textarea('description', $page->description, ['class' => 'form-control', 'id' => 'description']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Сохранить', ['class' => 'form-control', 'id' => 'photo_submit']) !!}
</div>
   
{!! Form::close() !!}
 @endforeach
@stop