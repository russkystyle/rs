{!! Form::open(['url' => 'photo/store', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    @if('photo_album_id')
    {!! Form::hidden('photo_album_id', $photo_album_id) !!}
    @endif
</div>
<div class="form-group">
    {!! Form::label('name', 'Название фото') !!}
    {!! Form::text('name', '', ['class' => 'form-control', 'id' => 'photo_name']) !!}
</div>
<div class="form-group">
    {!! Form::label('Загрузка фото') !!}
    {!! Form::file('photo', null, ['class' => 'form-control file_upload', 'id' => 'photo_file']) !!}

</div>
<div class="form-group">
    {!! Form::label('alt', 'Замещающий текст') !!}
    {!! Form::text('alt', '', ['class' => 'form-control', 'id' => 'photo_alt']) !!}
</div>
<div class="form-group">
    {!! Form::label('title', 'Заголовок фото') !!}
    {!! Form::text('title', '', ['class' => 'form-control', 'id' => 'photo_title']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Описание фото') !!}
    {!! Form::text('description', '', ['class' => 'form-control', 'id' => 'photo_description']) !!}
</div>
<div class="form-group">
    {!! Form::label('date', 'Дата публикации') !!}
    {!! Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control', 'id' => 'photo_date']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Создать', ['class' => 'form-control']) !!}
</div>
{!! Form::close() !!}