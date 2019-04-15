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
   
   <link rel="stylesheet" href="{{asset('fancybox/source/jquery.fancybox.css?v=2.1.5')}}" type="text/css" media="screen" />
   <link rel="stylesheet" href="{{asset('fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5')}}" type="text/css" media="screen" />
   <link rel="stylesheet" href="{{asset('fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7')}}" type="text/css" media="screen" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?120"></script>
<script type="text/javascript">
  VK.init({
    apiId: 5134538
  });
</script>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter44817478 = new Ya.Metrika({ id:44817478, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/44817478" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

</head>
<body>
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
                        <p id="contacts"><span><img src="{{asset('img/phone.png')}}" alt=""></span> +7(812) 921-39-55<br>&nbsp&nbsp&nbsp&nbsp&nbsp(911) 124-59-16</p>
                    </div> 
           </nav>
<!--Content            -->
@yield('content')

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
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.6&appId=1665968030286903";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>       

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
<!-- Add fancyBox -->

<script type="text/javascript" src="{{asset('fancybox/source/jquery.fancybox.pack.js?v=2.1.5')}}"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->

<script type="text/javascript" src="{{asset('fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5')}}"></script>
<script type="text/javascript" src="{{asset('fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6')}}"></script>


<script type="text/javascript" src="{{asset('fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            slideWidth: 220,
            slideHeight: 220,
            minSlides: 4,
            maxSlides: 5,
            slideMargin: 20,
            autoControls: true
        });
    });
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox")      
                .fancybox({
                    padding:0,
                    helpers: {
                        title:{
                            type:'outside'
                        }
                    }
                });
	});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var linkurl = document.location.href;
        $.each($('#links li a'),function(){
           if(this.href == linkurl){$(this).css({"color":"#ff8822"});};
        });
    });
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter32077031 = new Ya.Metrika({
                    id:32077031,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/32077031" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>