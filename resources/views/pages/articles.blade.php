@extends('home')
@section('content')
    <div class="container">
        <div class="row">
            {{ Breadcrumbs::render('articles') }}
            <div class="col s12 l8">
                <div class="section">
                    <div class="row center">
                        <h1>Статьи</h1>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        @foreach($articles as $article)
                            @include('pages.templates.article_articles')
                            @endforeach
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        {{ $articles->links('pages.templates.pagination') }}
                    </div>
                </div>
            </div>
            <div class="col l4 hide-on-med-and-down">
                <div class="section">
                    <div class="row center">
                        <h3 class="news-h3" style="padding-bottom: 0px;">Новости</h3>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        @foreach($news as $new)
                            @include('pages.templates.news_articles')
                            @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
    @stop
