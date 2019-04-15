@extends('index')
@section('content')
<div class="col-xs-12 info">
    <div class="col-xs-8" style="background-color: #fff;">
        
        <p class="articles_header">Организация досуга</p>
        <p>
            <a href="{{asset('img/servises/img/leis_1.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/leis_1.jpg')}}" width="220"></a>
            <a href="{{asset('img/servises/img/leis_2.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/leis_2.jpg')}}" width="220"></a>
            <a href="{{asset('img/servises/img/leis_3.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/leis_3.jpg')}}" width="220"></a>
        </p>
        <p class="articles_short_text">
            Наша забота – отвлечь постояльцев от мыслей о своих недугах. Комфорт, интересные занятия, различные мероприятия, игры, выступления творческих коллективов, просмотр нашей обширной фильмотеки, чтение любимых книг – вот неполный перечень наших досуговых мероприятий. На каждом этаже есть зона отдыха, занятия по интересам. Есть прекрасный биллиардный зал, где проводятся турниры. На каждом этаже в специально выделенном помещении проходят игры в шашки, шахматы, лото. Два пианино, где можно послушать игру пианиста. Спеть под караоке. У нас организован уголок художника, где на мольберте запечатлеваем внутренние переживания. В уголке скульптора лепим, поддерживая мелкую моторику рук. Каждую неделю пансионат посещают творческие коллективы ДК Кузьмолово. Приезжают артисты читать стихи в вечера поэзии. Перед пансионатом большая зона отдыха, где мы прогуливаемся, занимается гимнастикой.
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