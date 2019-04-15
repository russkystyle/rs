@extends('home')
@section('content')
    <div class="container">
        <div class="row">
            {{ Breadcrumbs::render('news') }}
            <div class="col s12 l8">
                <div class="section">
                    <div class="row center">
                        <h1>Новости</h1>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        @foreach($news as $new)
                            @include('pages.templates.news_news')
                        @endforeach
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        {{ $news->links('pages.templates.pagination') }}
                    </div>
                </div>
            </div>
            <div class="col l4 hide-on-med-and-down">
                <div class="section">
                    <div class="row center">
                        <h3 class="news-h3" style="padding-bottom: 0px;">Мы в соцсетях</h3>
                    </div>
                </div>
                <div class="section">
                    <div class="row">

                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
