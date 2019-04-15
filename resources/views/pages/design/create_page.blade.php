@extends('lk')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Редактирование и создание страниц</h1><br />
            <div class="col-md-4"></div>
            <div class="col-md-8">
                @include('pages.forms._page')
            </div>
        </div>
    </div>


@stop