<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <meta name="keywords" content="{{ isset($keywords) ? $keywords : '' }}">
    <meta name="description" content="{{ isset($description) ? $description : '' }}">
    <title>{{ isset($title) ? $title : 'Пансионат Русский Стиль' }}</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <link href='https://fonts.googleapis.com/css?family=Fira+Sans|Open+Sans' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="{{asset('css/jquery.bxslider.css')}}">
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
   <nav class="navbar navbar-default navbar-static-top">
       <div class="container">
         <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
        <div class="row">
           <nav id="header">
               <div class="col-xs-3">
                   <div id="logo">
                       <a href="{{url('/')}}"> <img src="{{asset('img/logo3.png')}}" alt="Русский Стиль логотип"></a>
                       <a href="{{url('/')}}"><img src="{{asset('img/logo_text.png')}}" alt=""></a>
                        </div>
               </div>

                  <div class="col-xs-6" style="left:-40px;">
                            <ul id="links">
                                <li role="presentation"><a href="{{url('servises')}}">Услуги и цены</a></li>
                                <li role="presentation"><a href="{{url('about')}}">О нас</a></li>
                                <li role="presentation"><a href="{{url('galery')}}">Галерея</a></li>
                                <li role="presentation"><a href="{{url('reviews')}}">Отзывы</a></li>
                                <li role="presentation"><a href="{{url('articles')}}">Статьи</a></li>
                                <li role="presentation"><a href="{{url('contacts')}}">Контакты</a></li>
                            </ul>
                        </div>

                    <div class="col-xs-3">
                        <p id="contacts"><span><img src="{{asset('img/phone.png')}}" alt=""></span> +7(812) 921-39-55</p>
                    </div> 
           </nav>
<!--Content            -->
<div class="col-xs-12 info2">
    <div class="col-xs-8">
@yield('content')
</div>
    <div class="col-xs-4"  style="background-color: #f8f8f8;">
        <h1>Управление страницами</h1>
        <p class="reviews_news_header" style="padding-left: 100px;"><a href="{{url('/admin')}}">Страницы</a></p>
        <p class="reviews_news_header" style="padding-left: 100px;"><a href="{{url('/album')}}">Фотоальбомы</a></p>
        <p class="reviews_news_header" style="padding-left: 100px;"><a href="{{url('/news')}}">Новости</a></p>
        <p class="reviews_news_header" style="padding-left: 100px;"><a href="{{url('/admin/articles')}}">Статьи</a></p>
        <p class="reviews_news_header" style="padding-left: 100px;"><a href="{{url('review/show')}}">Отзывы</a></p>
        <p class="reviews_news_header" style="padding-left: 100px;"><a href="{{url('prices/edit')}}">Цены</a></p>
    </div>
</div>
<!--End of body-->
    </div>
    </div>
<!--Footer-->
       
        <div class="navbar navbar-bottom">
            <div class="container">
                <div class="row">
                    <div id="footer">
                        <div id="left-col" class="col-xs-6">
                            <p>Русский Стиль (ООО) <br>
                            <span><img src="{{asset('img/dot.png')}}" alt=""></span> Ленинградская область, пос. Энколово, ул. Хуторская, д.17 <br>
                            <span><img src="{{asset('img/phone.png')}}" alt=""></span> <a href="tel:+7(812) 921-39-55" style="color:#f8f8f8;">+7(812) 921-39-55</a> <br>
                            <span><img src="{{asset('img/mail.png')}}" alt=""></span> <a href="mailto:info@russky-style.ru" style="color:#ffffff">info@russky-style.ru</a></p>
                        </div>
                        <div id="right-col" class="col-xs-6">
                            <p>Мы в соцсетях</p>
                            <div>
                            <a href="https://www.facebook.com/russky.style.pansion/"><img src="{{asset('img/fb.png')}}" alt="Русский Стиль в фейсбуке"></a>&nbsp;&nbsp;&nbsp;
                            <a href="https://vk.com/russky_style_ru"><img src="{{asset('img/vk.png')}}" alt="Русский Стиль в ВК"></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>     
        </div>   
        

<!--        Wrights-->
<!--
    <div style="top:20px;">
        <p>Разработка сайта: info@russtyle.ru</p>
    </div>
-->
<!-- Scripts   -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="{{asset('js/jquery.bxslider.js')}}"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            slideWidth: 220,
            slideHeight: 220,
            minSlides: 4,
            maxSlides: 4,
            slideMargin: 20,
            autoControls: true
        });
    });
</script>
<script type="text/javascript">
    CKEDITOR.replace('text', {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
    });
</script>
</body>
</html>