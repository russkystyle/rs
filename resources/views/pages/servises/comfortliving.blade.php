@extends('index')
@section('content')
<div class="col-xs-12 info">
    <div class="col-xs-8" style="background-color: #fff;">
        
        <p class="articles_header">Комфортное пребывание</p>
        <p>
            <a href="{{asset('img/servises/img/four_bed_1.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/four_bed_1.jpg')}}" width="220"></a>
            <a href="{{asset('img/servises/img/two_bed_1.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/two_bed_1.jpg')}}" width="220"></a>
            <a href="{{asset('img/servises/img/one_bed_2.jpg')}}" class="fancybox">
                <img src="{{asset('img/servises/img/preload/one_bed_2.jpg')}}" width="220"></a>
        </p>
        <p class="articles_short_text">
            В нашем пансионате для пожилых людей подготовлены уютные комнаты, рассчитанные на небольшое количество постояльцев. В пансионате имеется всё необходимое специализированное оборудование: кресла-каталки , ходунки, поручни. В комнатах – удобная мебель, телевизоры, музыкальные центры, кнопки вызова персонала. Атмосфера домашняя. Если родственники захотят заказать для своего пожилого близкого одноместный или двухместный номер – мы имеем возможность представить более комфортное пребывание. Самое главное – это радушие и забота опытного персонала, который поможет почувствовать пожилым людям себя как дома. 
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
