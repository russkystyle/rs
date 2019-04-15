@extends('admin')
@section('content')   
        <h3><a href="{{url('album/create')}}">Создать альбом</a></h3>

       <h1>Альбомы</h1>
       <table style="height: auto;">
            <tr>
                <th width="200">Название</th>
                <th width="440">Описание</th>
                <th width="50">Публикация</th>
                <th width="50">Дата публикации</th>
            </tr>
            @foreach($data as $albums)
            <tr style="border-bottom: 1px solid;">
                <td class="headline"><a href="{{url('album/' . $albums->id)}}">{{$albums->name}}</a></td>
                <td>{{$albums->description}}</td>
                <td>@if($albums->published === true)Опубликован @else Не опубликован @endif</td>
                <td>{{$albums->date}}</td>
            </tr>
            @endforeach
        </table>
@stop
