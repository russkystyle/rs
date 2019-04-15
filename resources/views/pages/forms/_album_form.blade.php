<div class="col-xs-8">
{!! Form::open(['url' => 'album', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {!! Form::label('name', 'Название альбома') !!}
    {!! Form::text('name', '', ['class' => 'form-control', 'id' => 'photo_name']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Описание альбома') !!}
    {!! Form::textarea('description', '', ['class' => 'form-control', 'id' => 'photo_alt']) !!}
</div>
<div class="form-group">
    {!! Form::label('date', 'Дата публикации') !!}
    {!! Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'photo_date']) !!}
</div>
<div class="form-group">
    {!! Form::label('published', 'Опубликовать альбом?') !!}
    {!! Form::checkbox('published', 'value', 'Опубликовать альбом?') !!}
</div>
<div class="form-group">
    {!! Form::submit('Создать', ['class' => 'form-control', 'id' => 'photo_submit']) !!}
</div>
{!! Form::close() !!}
</div>