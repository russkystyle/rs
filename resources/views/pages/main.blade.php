@extends('home')
@section('content')
{{--фото на главную--}}
<div class="container">
    <div class="section">
        <div class="row">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="{{ asset('img/main/img15.jpg') }}" alt="">
                    </li>
                    @foreach($main as $item)
                        <li>
                            <img src="{{ asset($item->url) }}" alt="{{ $item->alt }}" title="{{ $item->img_title }}">
                        </li>
                        @endforeach
                    {{--<li>--}}
                        {{--<img src="{{ asset('img/main/9may.jpg') }}" alt="">--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<img src="{{ asset('img/main/img1.jpg') }}" alt="">--}}
                    {{--</li>--}}
                    <li>
                        <img src="{{ asset('img/main/img2.jpg') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/main/img3.jpg') }}" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{--Секция описание--}}

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col l12 s12">
                <h1>Пансионат для пожилых "Русский Стиль"</h1>
            </div>
            <div class="col s12">
            <div class="col l6 s12">
                <div class="section">
                    <div class="video-container"><iframe src="https://www.youtube.com/embed/uR_zOJV-Yhg?ecver=2" width="640" height="360" style="position:absolute;width:100%;height:100%;left:0;border: none;" allowfullscreen></iframe></div>
                </div>
            </div>
            <div class="section col l6 s12" style="margin-top: 10px;">
                <p>
                    Никто не будет спорить с тем, что престарелых родителей нужно уважать и это является долгом абсолютно каждого человека. Ведь люди преклонного возраста страдают не столько от болезней, как от недостатка общения и одиночества. Но что делать, если вы работающий человек и не можете все свое время посвятить старому больному родственнику? В данной ситуации частный пансионат для пожилых людей в СПб и Ленинградской области – наиболее оптимальное решение. Как выбрать такое заведение? Почему стоит отдавать предпочтение пансионату «Русский Стиль»? Давайте разберемся.
                </p>
            </div>
            </div>
            <div class="col s12">
                <h2 style="font-size: 2.5rem;margin: 1.78rem 0 1.424rem;line-height: 110%;font-weight: 400;">Как подобрать пансионат для пожилых людей?</h2>
                <p>Чтобы не ошибиться и подобрать правильный пансионат для престарелых людей в Санкт-Петербурге, где вашему родственнику будет оказано должное внимание и уход, необходимо учитывать некоторые факторы. Основными критериями выбора являются:</p>
                <ul>
                    <li><img src="img/img/v.png" alt="Ок" style="margin-right: 7px;">Месторасположение &ndash; оптимальным решением будет пансионат, который расположен в тихом районе, но недалеко от города. Также учитывайте удобство транспортной развязки, чтобы вы в любой момент могли навестить родного человека.</li>
                    <li><img src="img/img/v.png" alt="Ок" style="margin-right: 7px;">Квалификация персонала &ndash; запомните, что сотрудники пансионата должны иметь соответствующий багаж знаний, опыт и медицинское образование. Кроме того, немаловажным фактором является наличие положительных качеств специалиста, а именно общительность, внимательность и дружелюбие.</li>
                    <li><img src="img/img/v.png" alt="Ок" style="margin-right: 7px;">Условия и обустройство комнаты &ndash; выбирайте те пансионаты для пожилых в пригороде (Ленобласть), которые имеют всё самое необходимое для уютного и комфортного проживания. Проверьте, чтобы комната была оборудована мебелью и техникой, а также чтобы в пансионате присутствовала библиотека, а его территория была ухоженной и чистой.</li>
                    <li><img src="img/img/v.png" alt="Ок" style="margin-right: 7px;">Стоимость &ndash; цена на проживание в пансионате определяется на основании тех услуг, которые в дальнейшем будут предоставляться человеку. Нередко пансионаты предлагают пакетное или комплексное обслуживание, в котором конкретно указаны все процедуры, входящие в стоимость.</li>
                </ul>
                <h2 style="font-size: 2.5rem;margin: 1.78rem 0 1.424rem;line-height: 110%;font-weight: 400;">Преимущества пансионата «Русский Стиль»</h2>
                <p>Ищете пансионаты для пожилых в пригороде Санкт-Петербурга? Не знаете, кому можно доверить здоровье и жизнь близкого родственника преклонного возраста? Тогда вам стоит обратить внимание на пансионат «Русский стиль».</p>
                <h3>Что мы можем предложить гостю?</h3>
                <p>Почему стоит отдавать предпочтение именно нашей фирме? Всё дело в том, что каждому постояльцу мы можем предоставить:</p>
                <ol>
                    <li>Постоянное или при необходимости временное проживание;</li>
                    <li>Круглосуточный уход;</li>
                    <li>Пятиразовое диетическое питание;</li>
                    <li>Регулярные прогулки на хорошо обустроенной территории;</li>
                    <li>Индивидуальный подход.</li>
                </ol>
                <p><strong>Будьте уверены, мы сможем обеспечить гостю достойный уход, общение и заботу!</strong></p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="section">
        <div class="row center">
            <p style="font-size: 2.5rem;margin: 1.78rem 0 1.424rem;line-height: 110%;font-weight: 400;width: 100%;">Что мы предлагаем нашим гостям:</p>
            @include('sections.main_page_offer')
        </div>
    </div>
</div>

<div class="container">
    <div class="section">
        <div class="row center">
            <p style="font-size: 2rem;margin: 1.46rem 0 1.168rem;line-height: 110%;font-weight: 400;">Наш фотоальбом</p>
            @foreach($albums as $album)
            <div class="col s12 l3">
                <div class="card">
                    <div class="card-image photoalbum">
                        <a href="{{ url('/albums') }}" class=""><img src="{{ array_first($album->photo->take(1)->pluck('thumb')) }}" alt="{{ $album->title . ' фото' }}">{{ $album->title }}</a>
                        {{--<span class="card-title" style="z-index: -100;">{{ $album->title }}</span>--}}
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

<div class="container">
    <div class="section">
        <div class="row center">
            <p style="font-size: 2rem;margin: 1.46rem 0 1.168rem;line-height: 110%;font-weight: 400;">Новости</p>

            @foreach($news as $new)
            <div class="col s12 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $new->thumb != null ? $new->thumb : 'img/news_img.png' }}" alt="{{ $new->title . ' новости' }}">
                    </div>
                    <div class="card-content">
                        <span class="card-title" style="min-height: 50px;font-size: 16px;line-height: 1.5;">{{ $new->title }}</span>
                        <p style="">
                            {!! str_limit($new->description, 100) !!}
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="{{ $new->ref != null ? url('/new/' . $new->ref) : '' }}">читать</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
    @stop