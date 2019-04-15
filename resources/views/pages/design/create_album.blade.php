@extends('admin')

@section('content')
<h3><a href="{{url('album')}}">Назад к альбомам</a></h3>
        @include('pages.forms._album_form')

@stop