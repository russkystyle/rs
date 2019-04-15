<header>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="{{ route('terms') }}">Условия проживания (заселения)</a></li>
        <li><a href="{{ route('rewards') }}">Грамоты</a></li>
    </ul>
    <!-- /#dropdown1.dropdown-content -->
    {{--номера--}}
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="{{ route('rooms') }}">Номера</a></li>
    </ul>

<nav style="color: #000">
    <div class="container">
        <div class="nav-wrapper">
            @if(Request::is('/'))
                <span>
                    <img src="{{ asset('img/logo3.png') }}" alt="Логотип Русский Стиль">
                    <img src="{{ asset('img/logo_text.png') }}" alt="">
                    <a style="color: #ff8822;float: right;" class="hide-on-med-and-up" href="tel:+7(812) 921-39-55"><img src="{{ asset('img/phone.png') }}" alt=""></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                </span>
                @else
                    <a href="{{ url('/') }}" class="brand-logo">
                        <img src="{{ asset('img/logo3.png') }}" alt="Логотип Русский Стиль">
                        <img src="{{ asset('img/logo_text.png') }}" alt="">
                        <a style="color: #ff8822;float: right;" class="hide-on-med-and-up" href="tel:+7(812) 921-39-55"><img src="{{ asset('img/phone.png') }}" alt=""></a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    </a>
                @endif

            <ul class="right hide-on-med-and-down">
                <li><a href="{{ url('/about') }}" class="dropdown-button" data-activates="dropdown1">О нас<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="{{ url('/servises') }}" class="dropdown-button" data-activates="dropdown2">Услуги и цены<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="{{ url('/albums') }}">Галерея</a></li>
                <li><a href="{{ url('/comments') }}">Отзывы</a></li>
                <li><a href="{{ url('/articles') }}">Статьи</a></li>
                <li><a href="{{ url('/news') }}">Новости</a></li>
                <li><a href="{{ url('/vopros-otvet') }}">Вопрос-Ответ</a></li>
                <li><a href="{{ url('/contacts') }}">Контакты</a></li>
                <li><a href="#" style="line-height: 1.5rem;margin-top: 3px;padding: 1.2rem 0;">
                        <span class="bage" style="color:#ff8822;"><img src="{{ asset('img/phone.png') }}" alt="phone" style="padding: 0 0.6rem;">+7(812) 921-39-55</span><br>
                    </a></li>
            </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="{{ url('/about') }}">О нас</a></li>
                    <li><a href="{{ url('/servises') }}">Услуги и цены</a></li>
                    <li><a href="{{ url('/albums') }}">Галерея</a></li>
                    <li><a href="{{ url('/comments') }}">Отзывы</a></li>
                    <li><a href="{{ url('/articles') }}">Статьи</a></li>
                    <li><a href="{{ url('/news') }}">Новости</a></li>
                    <li><a href="{{ url('/vopros-otvet') }}">Вопрос-Ответ</a></li>
                    <li><a href="{{ url('/contacts') }}">Контакты</a></li>
                </ul>
        </div>
    </div>
</nav>


</header>