@extends('home')
@section('content')
    <div class="container">
        <div class="row">
            {{ Breadcrumbs::render('contacts') }}
            <div class="col s12">
                <h1 class="center">Как нас найти</h1>
            </div>
            <div id="map" class="col s12">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ap8XMigYNjV6pi0erPhhw3jJcp6ooh0dC&amp;source=constructor" width="920" height="340" frameborder="0"></iframe>
            </div>
            <div class="col s12 l6" style="margin-top: 30px;">
                <h3><img src="img/img/car.png" alt="">На машине</h3>
                <p>от МЕГА-Парнас съезд на кольцо, в направлении д. Бугры, далее на "Корабсельки". Въезд в н.п. Энколово от въезда, примерно через 400 м, поворот налево на н.п. Мистолово (примерно 400 м от знака н.п. Энколово). Ориентир—указатель улица Хуторская. От поворота проехать 150 м, далее поворот направо на бетонную дорогу (указатель—улица Хуторская), далее через 100 м с правой стороны расположен пансионат «Русский Стиль»</p>
            </div>
            <div class="col s12 l6" style="margin-top: 30px;">
                <h3><img src="img/img/bus.png" alt="">Общественным транспортом</h3>
                <p>
                   <strong>от ст.м.Девяткино на автобусе 625</strong><br>
                    <strong>от ст.м. Парнас на маршрутке 674</strong><br>
                    <strong>от ст.м. Проспект Просвещения на маршрутке К-680.</strong><br>
                    Ехать до поворота на Мистолово (ориентир—указатель улица Хуторская), далее: пройти 150 м в направлении Мистолово, повернуть направо на бетонную дорогу (по указателю—улица Хуторская), далее через 100 м с правой стороны расположен пансионат «Русский Стиль»
                </p>
            </div>
        </div>
    </div>
    @stop