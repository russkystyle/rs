{!! Form::open(['url' => 'main']) !!}
<div class="form-group">
    {!! Form::label('name', 'Название страницы') !!}
    {!! Form::text('name', '', ['class' => 'form-control', 'id' => 'name']) !!}
</div>
<div class="form-group">
    {!! Form::label('title', 'Заголовок текста') !!}
    {!! Form::text('title', '', ['class' => 'form-control', 'id' => 'title']) !!}
</div>
<div class="form-group">
    {!! Form::label('keywords', 'Ключевые слова') !!}
    {!! Form::text('keywords', '', ['class' => 'form-control', 'id' => 'keywords']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Описание страницы') !!}
    {!! Form::textarea('description', '', ['class' => 'form-control', 'id' => 'description']) !!}
</div>
<div class="form-group">
    {!! Form::label('text', 'Текст статьи') !!}
    {!! Form::textarea('text', '', ['class' => 'form-control', 'id' => 'text']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Создать', ['class' => 'form-control', 'id' => 'photo_submit']) !!}
</div>
{!! Form::close() !!}