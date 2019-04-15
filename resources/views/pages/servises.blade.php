@extends('home')
@section('content')
    <div class="container">
        {{ Breadcrumbs::render('servises') }}
        <div class="section">
            <div class="row center">
                <h1>Услуги и цены</h1>
                
                <div class="row valign-wrapper" style='margin: 4rem 0;'>
                    @foreach($servises as $servise)
                     @if($servise->section == 'head')
                        <div class="col s4 m5 l5 xl5">
                            <a href="{{ url('/servises/' . $servise->ref) }}">
                            <div class="col s6">
                                <img src="{{ asset($servise->photo) }}" height="86" alt="">
                            </div>
                            <div class="col s6">
                                <span style="font-size: 2rem;color: rgba(0,0,0,.87);">{{ $servise->metakey }}</span>
                            </div>
                            </a>
                        </div>
                      @endif
                   @endforeach
                </div>
                
            <h2>Базовые услуги</h2>

                @foreach($servises as $servise)
                @if($servise->section == 'main')
                <div class="col s12 l3">
                    <div class="card">
                        <div class="card-image">
                            <a href="{{ url('/servises/' . $servise->ref) }}"><img style="min-height: 220px;min-width: 220px;" class="servises-img" src="{{ asset($servise->photo) }}"></a>
                            <span class="card-title servises">{{ $servise->title }}</span>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

            </div>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <div class="row center">
                <h2>Дополнительные услуги</h2>
                <div style="width: 20%;float: left; padding: 5px;">
                    <div class="card">
                        <div class="card-image">
                            <img style="height: 172px;width: 172px;" class="servises-img" src="/img/servises/doctor.jpg">
                            <span class="card-title servises">Вызов специалиста</span>
                        </div>
                    </div>
                </div>
                <div style="width: 20%;float: left; padding: 5px;">
                    <div class="card">
                        <div class="card-image">
                            <img style="height: 172px;width: 172px;" class="servises-img" src="/img/servises/obsledovanie.jpg">
                            <span class="card-title servises">Комплексное обследование, в т.ч. анализы</span>
                        </div>
                    </div>
                </div>
                <div style="width: 20%;float: left; padding: 5px;">
                    <div class="card">
                        <div class="card-image">
                            <img style="height: 172px;width: 172px;" class="servises-img" src="/img/servises/terapy.jpg">
                            <span class="card-title servises">Восстановительная терапия</span>
                        </div>
                    </div>
                </div>
                <div style="width: 20%;float: left; padding: 5px;">
                    <div class="card">
                        <div class="card-image">
                            <img style="height: 172px;width: 172px;" class="servises-img" src="/img/servises/pers_gyg.jpg">
                            <span class="card-title servises">Средства личной гигиены, лекарства</span>
                        </div>
                    </div>
                </div>
                <div style="width: 20%;float: left; padding: 5px;">
                    <div class="card">
                        <div class="card-image">
                            <img style="height: 172px;width: 172px;" class="servises-img" src="/img/servises/transfer.jpg">
                            <span class="card-title servises">Трансфер в пансионат</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section">
            <div class="row center">
                <h3>Стоимость размещения</h3>
                <div class="col s12 l8">
                    <table>
                        <thead style="height: 70px;
    background-color: #ff8822;
    color: #fff;">
                        <tr>
                            <th>Категория комнаты</th>
                            <th>Стоимость до 30 дней</th>
                            <th>Стоимость свыше 30 дней</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td><a href="#four">4х местные комнаты</a></td>
                            <td>1100 руб</td>
                            <td>1000руб</td>
                        </tr>
                        <tr>
                            <td><a href="#three">3х местные комнаты</a></td>
                            <td>1200 руб</td>
                            <td>1100 руб</td>
                        </tr>
                        <tr>
                            <td><a href="#two">2х местные комнаты</a></td>
                            <td>1400 руб</td>
                            <td>1300 руб</td>
                        </tr>
                        <tr>
                            <td><a href="#one">1-но местные комнаты</a></td>
                            <td>1500 руб</td>
                            <td>1400 руб</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col s12 l4" style="padding-top: 50px;text-align: left;padding-left: 40px">
                    Стоимость пребывания в пансионате зависит от категории комнаты и степени самостоятельности пожилого человека.

                   <strong>На размещение свыше 30 дней действует система скидок.</strong> Для ветеранов войны и труда действует система дополнительных скидок.
                </div>
            </div>
        </div>
    </div>

    <!--<div class="container">-->
    <!--    <div class="section">-->
    <!--        <div class="row center">-->
    <!--            <h3>Номерной фонд</h3>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="container">-->
    <!--    <div class="section">-->
    <!--        <div class="row center">-->
    <!--            <h4 style="text-align: left;"><span><img src="{{ asset('img/img/key.png') }}" alt="Ключ"></span>Одноместные комнаты</h4>-->
    <!--            <div id="one" class="col s12 l6">-->
    <!--                <img class="responsive-img" src="img/img/rooms/one_bed_1.jpg" alt="Одноместная комната первая" title="Одноместная комната первая">-->
    <!--                <p style="text-align: left;">-->
    <!--                    Одноместные комнаты-->
    <!--                    Одноместная комната Одноместная комната-->
    <!--                    Данный вид размещения предлагает проживание в комнате типа ЛЮКС и VIP. В номере ЛЮКС для постояльцев удобная мебель, шкаф, тумба, телевизор, радиоприемник, кнопка вызова. Применяются воздушные ароматизаторы. Питание возможно попросить доставлять в номер. Отдельная душевая комната рядом, на этом этаже.-->
    <!--                    VIP размещение представлено современной мебелью, удобными деревянными кроватями. Кроме того, в номере есть телевизор, холодильник, диван для посетителей, мягкий ковер, освежители воздуха, ароматизаторы. Питание возможно попросить доставлять в номер. Отдельная душевая комната рядом, на этом этаже.-->
    <!--                </p>-->
    <!--            </div>-->
    <!--            <div class="col s12 l6">-->
    <!--                <img src="img/img/rooms/one_bed_2.jpg" alt="Одноместная комната вторая" title="Одноместная комната вторая">-->
    <!--                <p style="text-align: left;font-size: 1.4rem;">Хотите забронировать данный номер?-->
    <!--                    Позвоните нам: + 7(812) 921-39-55 или</p>-->
    <!--                <a class="waves-effect waves-light btn" style="background-color: #FF8822;" href="#modal1">Оставьте заявку</a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="container">-->
    <!--    <div class="section">-->
    <!--        <div class="row center">-->
    <!--            <h4 style="text-align: left;"><span>-->
    <!--                    <img src="{{ asset('img/img/key.png') }}" alt="Ключ">-->
    <!--                    <img src="{{ asset('img/img/key.png') }}" alt="Ключ">-->
    <!--                </span>Двухместные комнаты</h4>-->
    <!--            <div id="two" class="col s12 l6">-->
    <!--                <img class="responsive-img" src="img/img/rooms/two_bed_1.jpg" alt="Двухместная комната первая" title="Двухместная комната первая">-->
    <!--                <p style="text-align: left;">-->
    <!--                    Подобные номера представлены удобной современной мебелью, у каждой кровати тумбочка, шкаф, прикроватный коврик, радиоприемник. Над каждой кроватью – кнопка вызова сиделки. Питание проводится в обеденном зале. Применяются воздушные ароматизаторы. Для тех, кто самостоятельно не сможет передвигаться, сиделка окажет помощь, или предложит кресло-каталку.-->
    <!--                </p>-->
    <!--            </div>-->
    <!--            <div class="col s12 l6">-->
    <!--                <img src="img/img/rooms/two_bed_2.jpg" alt="Двухместная комната вторая" title="Двухместная комната вторая">-->
    <!--                <p style="text-align: left;font-size: 1.4rem;">Хотите забронировать данный номер?-->
    <!--                    Позвоните нам: + 7(812) 921-39-55 или</p>-->
    <!--                <a class="waves-effect waves-light btn" style="background-color: #FF8822;" href="#modal1">Оставьте заявку</a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="container">-->
    <!--    <div class="section">-->
    <!--        <div class="row center">-->
    <!--            <h4 style="text-align: left;"><span>-->
    <!--                    <img src="{{ asset('img/img/key.png') }}" alt="Ключ">-->
    <!--                    <img src="{{ asset('img/img/key.png') }}" alt="Ключ">-->
    <!--                    <img src="{{ asset('img/img/key.png') }}" alt="Ключ">-->
    <!--                </span>Трехместные комнаты</h4>-->
    <!--            <div id="three" class="col s12 l6">-->
    <!--                <img class="responsive-img" src="img/img/rooms/three_bed_1.jpg" alt="Трехместная комната первая" title="Трехместная комната первая">-->
    <!--                <p style="text-align: left;">-->
    <!--                    Подобные номера представлены удобной современной мебелью, у каждой кровати тумбочка, шкаф, прикроватный коврик, радиоприемник. Над каждой кроватью – кнопка вызова сиделки. Питание проводится в обеденном зале. Применяются воздушные ароматизаторы. Для тех, кто самостоятельно не сможет передвигаться, сиделка окажет помощь, или предложит кресло-каталку.-->
    <!--                </p>-->
    <!--            </div>-->
    <!--            <div class="col s12 l6">-->
    <!--                <img src="img/img/rooms/three_bed_2.jpg" alt="Трехместная комната вторая" title="Трехместная комната вторая">-->
    <!--                <p style="text-align: left;font-size: 1.4rem;">Хотите забронировать данный номер?-->
    <!--                    Позвоните нам: + 7(812) 921-39-55 или</p>-->
    <!--                <a class="waves-effect waves-light btn" style="background-color: #FF8822;" href="#modal1">Оставьте заявку</a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="container">-->
    <!--    <div class="section">-->
    <!--        <div class="row center">-->
    <!--            <h4 style="text-align: left;"><span>-->
    <!--                    <img src="{{ asset('img/img/key.png') }}" alt="Ключ">-->
    <!--                    <img src="{{ asset('img/img/key.png') }}" alt="Ключ">-->
    <!--                    <img src="{{ asset('img/img/key.png') }}" alt="Ключ">-->
    <!--                    <img src="{{ asset('img/img/key.png') }}" alt="Ключ">-->
    <!--                </span>Четырехместные комнаты</h4>-->
    <!--            <div id="four" class="col s12 l6">-->
    <!--                <img class="responsive-img" src="img/img/rooms/four_bed_1.jpg" alt="Четырехместная комната первая" title="Четырехместная комната первая">-->
    <!--                <p style="text-align: left;">-->
    <!--                    Подобные номера представлены удобной современной мебелью, у каждой кровати тумбочка, шкаф, прикроватный коврик, радиоприемник. Над каждой кроватью – кнопка вызова сиделки. Питание проводится в обеденном зале. Применяются воздушные ароматизаторы. Для тех, кто самостоятельно не сможет передвигаться, сиделка окажет помощь, или предложит кресло-каталку.-->
    <!--                </p>-->
    <!--            </div>-->
    <!--            <div class="col s12 l6">-->
    <!--                <img src="img/img/rooms/four_bed_2.jpg" alt="Четырехместная комната вторая" title="Четырехместная комната вторая">-->
    <!--                <p style="text-align: left;font-size: 1.4rem;">Хотите забронировать данный номер?-->
    <!--                    Позвоните нам: + 7(812) 921-39-55 или</p>-->
    <!--                <a class="waves-effect waves-light btn" style="background-color: #FF8822;" href="#modal1">Оставьте заявку</a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
@include('forms.order_form')

    @stop