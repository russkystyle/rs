@extends('home')
@section('content')
<div class="container">
    <div class="row">
        {{ Breadcrumbs::render('comments') }}
        <div class="col s12 l8">
            <div class="section">
                <div class="row center">
                    <h1>Отзывы</h1>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    @if(\Session::has('message'))
                        <div class="chip" style="width: 100%;">
                            {{ \Session::get('message') }}
                            <i class="close material-icons">close</i>
                        </div>
                        @endif
                </div>
            </div>
            <div class="section">
                <div class="container">
                <div class="row">
                    <form action="{{ url('/sendcomment') }}" method="post">
                        {{ csrf_field() }}
                        <div class="input-field col s12">
                            <input name="name" id="first_name" type="text" class="validate">
                            <label data-error="{{ $errors->has('name') ? $errors->first('name') : '' }}" for="first_name">Ваше имя</label>

                        </div>
                        <div class="input-field col s12">
                            <input name="phone" id="first_name" type="text" class="validate">
                            <label data-error="{{ $errors->has('phone') ? $errors->first('phone') : '' }}" for="first_name">Ваше телефон</label>
                        </div>
                        <div class="input-field col s12">
                            <input name="email" id="first_name" type="text" class="validate">
                            <label data-error="{{ $errors->has('email') ? $errors->first('email') : '' }}" for="first_name">Ваше email</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea name="description" id="textarea" class="materialize-textarea"></textarea>
                            <label data-error="{{ $errors->has('description') ? $errors->first('description') : '' }}" for="first_name">Ваше сообщение</label>
                        </div>
                        <button type="submit" class="waves-effect waves-light btn" style="background-color: #ff8822;">Отправить</button>
                    </form>
                </div>
                </div>
            </div>
            <div class="section">
                <div class="row">
                    @foreach($comments as $comment)
                    @include('pages.templates.comments_comments')
                        @endforeach
                </div>
            </div>
            <div class="section">
                <div class="row">
                    {{ $comments->links('pages.templates.pagination') }}
                </div>
            </div>
        </div>
        <div class="col l4 hide-on-med-and-down">
            <div class="section">
                <div class="row center">
                    <h3 class="news-h3">Новости</h3>
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
</div>
    @stop