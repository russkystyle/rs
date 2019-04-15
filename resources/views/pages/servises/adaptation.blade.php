@extends('index')
@section('content')
<div class="col-xs-12 info">
    <div class="col-xs-8" style="background-color: #fff;">
        
        <p class="articles_header">Социальная адаптация</p>
        <p>
            <a href="{{asset('img/servises/img/adapt_1.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/adapt_1.jpg')}}" width="220"></a>
            <a href="{{asset('img/servises/img/adapt_2.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/adapt_2.jpg')}}" width="220"></a>
            <a href="{{asset('img/servises/img/adapt_3.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/adapt_3.jpg')}}" width="220"></a>
        </p>
        <p class="articles_short_text">
            Ваш близкий человек поселился в нашем пансионате. Теперь наша задача сделать его пребывание комфортным. Общение со своими сверстниками, насыщенная досуговая программа, ежедневное пребывание на свежем воздухе, сердечная забота профессионально подготовленного персонала позволят пройти адаптационный период безболезненно. 
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