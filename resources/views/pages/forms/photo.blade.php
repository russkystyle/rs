<div class="form-group">
    {!! Form::label('title', 'Название фото') !!}
    {!! Form::text('title', $photo->title, ['class' => 'form-control', 'id' => 'photo_title']) !!}
</div>
<div class="form-group">
    {!! Form::label('Загрузка фото') !!}
    {!! Form::file('photo', $photo->path, ['class' => 'form-control file_upload', 'id' => 'photo_file']) !!}

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