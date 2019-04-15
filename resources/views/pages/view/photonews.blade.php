@extends('admin')
@section('content')
{!! Form::open(['url' => 'photonews/store', 'enctype' => 'multipart/form-data']) !!}

<div class="form-group">
    {!! Form::label('title', 'Название фото') !!}
    {!! Form::text('title', '', ['class' => 'form-control', 'id' => 'photo_name']) !!}
</div>
<div class="form-group">
    {!! Form::label('photo', 'Название фото') !!}
    {!! Form::file('photo', '', ['class' => 'form-control', 'id' => 'photo_name']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Название фото') !!}
    {!! Form::text('description', '', ['class' => 'form-control', 'id' => 'photo_name']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Создать', ['class' => 'form-control']) !!}
</div>
{!! Form::close() !!}
@stop

