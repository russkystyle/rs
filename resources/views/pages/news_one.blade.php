@extends('home')
@section('content')
    <div class="container">
        <div class="row">

            {{ Breadcrumbs::render('new', $data) }}
            <div class="col s12 l8">
                <div class="section">
                    <div class="row center">
                        <h1>{{ $data[0]['title'] }}</h1>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        <div class="card comments">
                            <div class="card-content">

                                {!! $data[0]['description'] !!}
                                <span class="card-title articles-date" style="font-size: 1.2rem;font-weight: 600;">
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data[0]['created_at'])->format('d m Y') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col l4 hide-on-med-and-down">
                <div class="section">
                    <div class="row">
                        <h3 class="news-h3 center" style="padding-bottom: 0px;">Последние новости</h3>
                        @foreach($news as $new)
                            @include('pages.templates.news_articles')
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop