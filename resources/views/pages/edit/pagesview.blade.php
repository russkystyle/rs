@extends('admin')
@section('content')

    <h1>Страницы</h1>
    <table style="height: auto;">
            <tr>
                <th width="130">Страница</th>
                <th width="350">Описание</th>
                <th width="130">Ключевые слова</th>
            </tr>
            @foreach($data as $page)
            <tr>
                <td class="headline"><a href="{{url('page/' . $page->id . '/edit')}}">{{$page->title}}</a></td>
                <td>{{$page->description}}</td>
                <td>{{$page->keywords}}</td>
            </tr>
            @endforeach
           
        </table>

@stop

