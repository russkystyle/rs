@extends('admin')
@section('content')
<h2><a href="{{url('admin/articles/create')}}">Создать статью</a></h2>
@foreach($data as $data)
        <p class="articles_header">{{$data->title}}</p>
        <p class="articles_date">{{$data->date}}</p>
        <img src="{{asset('img/IMG_2.jpg')}}" height="307" width="460" alt="">
        <p><a href="{{url('admin/articles/' . $data->id . '/delete')}}">Удалить</a></p>
        <p><a href="{{url('admin/articles/' . $data->id . '/edit')}}">Редактировать</a></p>
@endforeach
@stop