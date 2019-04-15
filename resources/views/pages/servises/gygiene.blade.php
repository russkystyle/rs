@extends('index')
@section('content')
<div class="col-xs-12 info">
    <div class="col-xs-8" style="background-color: #fff;">
        
        <p class="articles_header">Гигиенические процедуры</p>
        <p>
            <a href="{{asset('img/servises/img/gyg_1.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/gyg_1.jpg')}}" width="220"></a>
            <a href="{{asset('img/servises/img/gyg_2.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/gyg_2.jpg')}}" width="220"></a>
            <a href="{{asset('img/servises/img/gyg_3.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/gyg_3.jpg')}}" width="220"></a>
        </p>
        <p class="articles_short_text">
            Каждое утро начинается в пансионате с приведения пациентов в надлежащий порядок! Мы все умываемся. Кому-то приходится помочь, кто-то  молодец – сам  справляется. Чистим зубы, причесываемся, чистим уши. Все измерили температуру, давление. Переодеваемся после сна в свежую одежду. Всё! Все готовы к  новому дню. Идем завтракать вкусно и сытно.<br>
<br>Вечером всё повторяется. Моемся, переодеваемся, идем спать. Каждую неделю – банный день. Сиделочки всем помогут принять ванну с любимыми шампунями и душистыми мылами. Всё белье чистое – постельное и нательное. Сладко спится в чистоте!

        </p>
       
    </div>
    
    <div class="col-xs-4">
         <div class="fb-page" data-href="https://www.facebook.com/russky.style.pansion/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/russky.style.pansion/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/russky.style.pansion/">Русский стиль</a></blockquote></div>
        
          <!-- VK Widget -->
        <script type="text/javascript" src="//vk.com/js/api/openapi.js?122"></script>


        <!-- VK Widget -->
          <div id="vk_groups"></div>
          <script type="text/javascript">
          VK.Widgets.Group("vk_groups", {mode: 0, width: "300", height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 104292587);
         </script>
        

    </div>
</div>

@stop