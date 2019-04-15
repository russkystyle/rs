@extends('home')
@section('content')
{{--фото на главную--}}
<div class="container">
    <div class="section">
        <div class="row">
            <div class="carousel carousel-slider" data-indicators="true" style="height: 400px;">
                <a href="" class="carousel-item"><img src="{{ asset('img/main/9may.jpg') }}" alt=""></a>
                <a href="" class="carousel-item"><img src="{{ asset('img/main/img1.jpg') }}" alt=""></a>
                <a href="" class="carousel-item"><img src="{{ asset('img/main/img2.jpg') }}" alt=""></a>
                <a href="" class="carousel-item"><img src="{{ asset('img/main/img3.jpg') }}" alt=""></a>
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
                    <div class="video-container"><iframe src="https://www.youtube.com/embed/uR_zOJV-Yhg?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
                </div>
            </div>
            <div class="section col l6 s12" style="margin-top: 10px;">
                <p>
                    Никто не будет спорить с тем, что престарелых родителей нужно уважать и это является долгом абсолютно каждого человека. Ведь люди преклонного возраста страдают не столько от болезней, сколько от недостатка общения и одиночества. Но что делать, если вы работающий человек и не можете всё своё время посвятить старому больному родственнику? В данной ситуации частный пансионат для пожилых людей в СПб и Ленинградской области – наиболее оптимальное решение. Как выбрать такое заведение? Почему стоит отдавать предпочтение пансионату «Русский Стиль»? Давайте разберёмся.
                </p>
            </div>
            </div>
            <div class="col s12">
                    <h2>Как подобрать пансионат для пожилых людей?</h2>
                    <p>Чтобы не ошибиться и подобрать правильный пансионат для престарелых людей в Санкт-Петербурге, где вашему родственнику будет оказано должное внимание и уход, необходимо учитывать некоторые факторы. Основными критериями выбора являются:</p>
                    <ul>
						<li>Месторасположение &ndash; оптимальным решением будет пансионат, который расположен в тихом районе, но недалеко от города. Также учитывайте удобство транспортной развязки, чтобы вы в любой момент могли навестить родного человека.</li>
						<li>Квалификация персонала &ndash; запомните, что сотрудники пансионата должны иметь соответствующий багаж знаний, опыт и медицинское образование. Кроме того, немаловажным фактором является наличие положительных качеств специалиста, а именно общительность, внимательность и дружелюбие.</li>
						<li>Условия и обустройство комнаты &ndash; выбирайте те пансионаты для пожилых в пригороде (Ленобласть), которые имеют всё самое необходимое для уютного и комфортного проживания. Проверьте, чтобы комната была оборудована мебелью и техникой, а также чтобы в пансионате присутствовала библиотека, а его территория была ухоженной и чистой.</li>
						<li>Стоимость &ndash; цена на проживание в пансионате определяется на основании тех услуг, которые в дальнейшем будут предоставляться человеку. Нередко пансионаты предлагают пакетное или комплексное обслуживание, в котором конкретно указаны все процедуры, входящие в стоимость.</li>
                    </ul>
					<h2>Преимущества пансионата «Русский Стиль»</h2>
                    <p>Ищете пансионаты для пожилых в пригороде Санкт-Петербурга? Не знаете, кому можно доверить здоровье и жизнь близкого родственника преклонного возраста? Тогда вам стоит обратить внимание на пансионат «Русский стиль».</p>
                    <p><strong>Что мы можем предложить гостю?</strong></p>
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
            <h2>Что мы предлагаем нашим гостям:</h2>
            @include('sections.main_page_offer')
        </div>
    </div>
</div>

<div class="container">
    <div class="section">
        <div class="row center">
            <h3>Галерея</h3>
            @foreach($albums as $album)
            <div class="col s12 l3">
                <div class="card">
                    <div class="card-image">
                        <a href="{{ url('/albums') }}"><img src="{{ array_first($album->photo->take(1)->pluck('thumb')) }}"></a>
                        {{--<span class="card-title">Card Title</span>--}}
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
            <h3>Новости</h3>

            @foreach($news as $new)
            <div class="col s12 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $new->thumb != null ? $new->thumb : 'img/news_img.png' }}">
                    </div>
                    <div class="card-content">
                        <strong class="card-title">{{ $new->title }}</strong>
                        <p style="min-height: 90px;">
                            {!! str_limit($new->description, 120) !!}
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="{{ $new->ref != null ? url('/news/' . $new->ref) : '' }}">читать</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
    @stop