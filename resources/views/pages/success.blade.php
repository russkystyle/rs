@extends('home')
@section('content')
    <div class="col s12" style="align-items: center;
    justify-content: center;
    display: flex;
    height: 80vh;">
        <div class="center">
            <h1>Спасибо за вашу заявку</h1>
            <p>Мы свяжемся с вами в ближайшее время</p>
            <a href="{{ url('/servises') }}">Назад</a>
        </div>
    </div>

    @stop