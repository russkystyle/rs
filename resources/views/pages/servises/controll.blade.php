@extends('index')
@section('content')
<div class="col-xs-12 info">
    <div class="col-xs-8" style="background-color: #fff;">
        
        <p class="articles_header">Круглосуточный контроль</p>
        <p>
            <a href="{{asset('img/servises/img/cont_1.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/cont_1.jpg')}}" width="220"></a>
            <a href="{{asset('img/servises/img/cont_2.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/cont_2.jpg')}}" width="220"></a>
            <a href="{{asset('img/servises/img/cont_3.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/cont_3.jpg')}}" width="220"></a>
        </p>
        <p class="articles_short_text">
            Круглосуточный уход за постояльцами в нашем пансионате оказывают профессиональные, хорошо обученные медсестры-сиделки. Ежедневно осуществляется мониторинг жизненно важных показателей: измеряется артериальное давление, пульс, температура тела, осмотр тела на наличие пролежней, опрелостей. Все произведенные наблюдения заносятся в карту постояльца. Строго соблюдается исполнение назначений врача, в том числе прием лекарств и других лечебных мероприятий, физических упражнений. Специально разработанная врачами программа занятий, развивающих и поддерживающих моторику, память, речь, находится под строгим контролем за ее выполнением.
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