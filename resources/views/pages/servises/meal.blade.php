@extends('index')
@section('content')
<div class="col-xs-12 info">
    <div class="col-xs-8" style="background-color: #fff;">
        
        <p class="articles_header">Сбалансированное питание</p>
        <p>
            <a href="{{asset('img/servises/img/meal_1.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/meal_1.jpg')}}" width="220"></a>
            <a href="{{asset('img/servises/img/meal_2.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/meal_2.jpg')}}" width="220"></a>
            <a href="{{asset('img/servises/img/meal_3.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/meal_3.jpg')}}" width="220"></a>
        </p>
        <p class="articles_short_text">
            Питание в преклонном возрасте требует соблюдения ряда правил, так как со временем обмен веществ меняется. Питание в пансионате сбалансированное. С соблюдением правил диетологии. Питание обеспечивает организм необходимой энергией без избытка калорийности. В меню много белковой пищи, клетчатки. Особое внимание диабетикам. Для них – стол №9.<br><br>
Для приготовления блюд используются отборные, свежие продукты, чтобы наши пенсионеры питаясь 5 раз в сутки, получали не только удовольствие, но и пользу.<br><br>
Летом и осенью всю зелень и овощи вы собираем с наших теплиц. Всё свежее, все витамины на своем месте!

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