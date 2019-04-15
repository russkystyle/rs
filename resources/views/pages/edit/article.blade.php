@extends('admin')
@section('content')

{!! Form::open(['url' => 'admin/articles/store', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {!! Form::label('title', 'Название статьи') !!}
    {!! Form::text('title', '', ['class' => 'form-control', 'id' => 'title']) !!}
</div>
<div class="form-group">
    {!! Form::label('text', 'Текст статьи') !!}
    {!! Form::textarea('text', '', ['class' => 'form-control', 'name' => 'text', 'id' => 'text']) !!}
</div>
<div class="form-group">
    {!! Form::label('date', 'Название статьи') !!}
    {!! Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'date']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Создать', ['class' => 'form-control', 'id' => 'submit']) !!}
</div>
{!! Form::close() !!}
@stop
