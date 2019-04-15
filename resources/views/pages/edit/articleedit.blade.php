@extends('admin')
@section('content')

{!! Form::open(['url' => 'admin/articles/' . $data['id'] . '/update', 'enctype' => 'multipart/form-data']) !!}

<div class="form-group">
    {!! Form::label('title', 'Название статьи') !!}
    {!! Form::text('title', $data['title'], ['class' => 'form-control', 'id' => 'title']) !!}
</div>
<div class="form-group">
    {!! Form::label('text', 'Текст статьи') !!}
    {!! Form::textarea('text', $data['text'], ['class' => 'form-control', 'name' => 'text', 'id' => 'text']) !!}
</div>
<div class="form-group">
    {!! Form::label('date', 'Название статьи') !!}
    {!! Form::text('date', $data['date'], ['class' => 'form-control', 'id' => 'date']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Изменить', ['class' => 'form-control', 'id' => 'submit']) !!}
</div>
{!! Form::close() !!}

@stop
