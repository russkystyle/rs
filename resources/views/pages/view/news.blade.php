@extends('admin')
@section('content')
    <h1>Новости</h1>
    <h3><a href="{{url('news/create')}}">Создать</a></h3>
    @foreach($data as $data)
    <div class="col-xs-5" style="margin-right: 20px;">
        @if($data['photo']['path'] !== null)
        <a href="{{asset($data['photo']['path'])}}"><img src="{{asset($data['photo']['preload_path'])}}" width="250" height="201" alt=""></a>
        @endif
         <p class="news_header">{{$data['title']}}</p>
        <p class="news_data_text"><span><img src="img/cal.png" class="news_data_img" alt=""></span>{{$data['date']}}</p>
        <p class="news_text">{{$data['text']}}</p>
        <p class="news_folow"><a href="{{url('news/' . $data['id'] . '/edit')}}">Редактировать</a></p>
        <p class="news_folow"><a href="{{url('news/' . $data['id'] . '/delete')}}">Удалить</a></p>
    </div>
    @endforeach
@stop