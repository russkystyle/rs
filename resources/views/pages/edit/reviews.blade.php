@extends('admin')
@section('content')
    @foreach($data as $data)
        <div class="reviews_order"  style="height: 600px;">
            <div class="reviews_order_form">
              <p class="reviews_order_header">Отзыв: {{$data->id}}</p>
              {!! Form::open(['url' => 'review/' . $data->id . '/edit', 'enctype' => 'multipart/form-data']) !!}
                 <input name="name" type="text" style="width:420px;" value="{{$data->name}}">
                 <input name="email" type="text" style="width:420px;" value="{!!$data->email!!}">
                 <input name="phone" type="text" style="width:420px;" value="{!!$data->phone!!}">
                  <textarea name="message" style="width:420px;height:150px;">{!!$data->message!!}</textarea>
                  <input type="file" name="file" style="background-image: url('img/skrepka.png');background-repeat: no-repeat;">
                  <p style="padding:20px 0 0 20px;"><img src="{{asset('img/skrepka.png')}}" alt="">&nbsp;&nbsp; Прикрепить файл</p>
                  @if($data->published == 1)
                  <p style="width:420px;"><input type="checkbox" name="published" checked="">Опубликован</p>
                  @else
                  <p style="width:420px;"><input type="checkbox" name="published">Опубликовать</p>
                  @endif
                  <input type="submit" class="button" style="margin:20px 0 0 20px;width:260px;" value="Опубликовать">
              {!! Form::close() !!}
              
          </div>
      </div>
    @endforeach
@stop

