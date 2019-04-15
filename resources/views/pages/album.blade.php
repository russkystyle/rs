@extends('home')
@section('content')
    <div class="container">
        {{ Breadcrumbs::render('album', $album) }}
        <div class="section" style="margin-top: 70px;">
            <div class="row center">
                <h1>{{ $album[0]['title'] }}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <div class="row center">
                @foreach($photo as $item)
                    <div class="col s12 l3" style="rgba(255, 136, 34, 0.8)">
                        {{--<a href="{{ asset($item->photo) }}" data-lightbox="{{ $item->photoalbums_id }}" data-title="{{$item->title}}">--}}
                            {{--<img style="margin: 20px;" class="servises-img" src="{{ asset($item->thumb) }}" alt="{{ $item->alt }}" title="{{ $item->title }}">--}}
                        {{--</a>--}}
                        <lightbox src="{{ asset($item->photo) }}" caption="{{$item->title}}" album="{{ $item->photoalbums_id }}">
                            <img class="album-shortcut" style="margin: 20px;" class="servises-img" src="{{ asset($item->thumb) }}" alt="{{ $item->alt }}" title="{{ $item->title }}">
                        </lightbox>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop