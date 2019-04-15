@extends('home')
@section('content')
<div class="container">
    {{ Breadcrumbs::render('albums') }}
    <div class="section">
        <div class="row center">
            <h1>Наш фотоальбом</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="section">
        <div class="row center">
            @foreach($albums as $photo)
                @endforeach
            @foreach($albums as $album)
            <div class="col s12 l3" style="rgba(255, 136, 34, 0.8);display: flex;justify-content: center; align-items: center;">
                <a href="{{ url('/album/' . $album->ref) }}" style="display: flex;align-items: center;justify-content: center;">
                    <p style="position: absolute;background-color: rgba(255, 255, 255, 0.9);color: #ff8822;max-width: 180px;font-size: 20px;">{{ $album->title }}</p>
               <img style="margin: 20px;" class="servises-img" src="{{ array_first($album->photo->take(1)->pluck('thumb')) }}">
                </a>
            </div>
                @endforeach
        </div>
    </div>
</div>
    @stop