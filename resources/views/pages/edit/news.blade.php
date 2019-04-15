@extends('admin')
@section('content')
<h3><a href="{{url('news')}}">Назад к новостям</a></h3>
    {!! Form::open(['url' => 'news/store']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Заголовок новости') !!}
            {!! Form::text('title', '', ['class' => 'form-control', 'id' => 'news_title']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('text', 'Новость') !!}
            {!! Form::textarea('text', '', ['class' => 'form-control', 'id' => 'news_title']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Создать', ['class' => 'form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop

