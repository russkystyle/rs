<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    @if(isset($head))
    @include('layouts.meta', ['head' => $head])
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="yandex-verification" content="1b973736cceb2ea8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon">
    <link rel="image_src" href="{{ asset('img/site-preview.jpg') }}"/>
    <style>
        .photoalbum:hover{
            cursor: pointer;
            color: #fff;
            opacity: 0.2;
        }

.jivo-btn {
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   box-sizing: border-box;
   margin: 0;
   text-transform: none;
   cursor: pointer;
   background-image: none;
   display: inline-block;
   padding: 6px 12px;
   margin-bottom: 0;
   font-size: 14px;
   font-weight: normal;
   line-height: 1.428571429;
   text-align: center;
   vertical-align: middle;
   cursor: pointer;
   border: 0px;
   border-radius: 4px;
   white-space: nowrap;
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   -o-user-select: none;
   user-select: none;
}
.jivo-btn:hover {
   box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 2px rgba(0,0,0,0.2), inset 0 0 20px 10px rgba(255,255,255,0.3);
   -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 2px rgba(0,0,0,0.2), inset 0 0 20px 10px rgba(255,255,255,0.3);
   -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 2px rgba(0,0,0,0.2), inset 0 0 20px 10px rgba(255,255,255,0.3);
}
.jivo-btn.jivo-btn-light:hover{
   box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 2px rgba(0,0,0,0.3), inset 0 0 20px 10px rgba(255,255,255,0.1);
   -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 2px rgba(0,0,0,0.3), inset 0 0 20px 10px rgba(255,255,255,0.1);
   -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 2px rgba(0,0,0,0.3), inset 0 0 20px 10px rgba(255,255,255,0.1);
}
.jivo-btn.jivo-btn-light{
   box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 1px rgba(0,0,0,0.3);
   -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 1px rgba(0,0,0,0.3);
   -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 1px rgba(0,0,0,0.3);
}
.jivo-btn:active,
.jivo-btn.jivo-btn-light:active{
   box-shadow: 0 1px 0px rgba(255,255,255,0.4), inset 0 0 15px rgba(0,0,0,0.2);
   -moz-box-shadow: 0 1px 0px rgba(255,255,255,0.4), inset 0 0 15px rgba(0,0,0,0.2);
   -webkit-box-shadow: 0 1px 0px rgba(255,255,255,0.4), inset 0 0 15px rgba(0,0,0,0.2);
   cursor: pointer;
}
.jivo-btn:active {
   outline: 0;
   background-image: none;
   -webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,0.125);
   box-shadow: inset 0 3px 5px rgba(0,0,0,0.125);
}
.jivo-btn-gradient {
   background-image: url(//static.jivosite.com/button/white_grad_light.png);
   background-repeat: repeat-x;
}
.jivo-btn-light.jivo-btn-gradient {
   background-image: url(//static.jivosite.com/button/white_grad.png);
}
.jivo-btn-icon {
   width:17px;
   height: 20px;
   background-repeat: no-repeat;
   display: inline-block;
   vertical-align: middle;
   margin-right: 10px;
   margin-left: -5px;
}
.jivo-btn-light {
   color: #fff;
}
..jivo-btn-dark {
   color: #222;
}
</style>
<!--[if lte IE 7]>
<style type="text/css">
.jivo-btn, .jivo-btn-icon  {
   display: inline;
}
    </style>
</style>
<![endif]-->
</head>
<body>
<div id="app">
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
    <a href="#" class="scrollup">Наверх</a>
    @include('layouts.footer')
</div>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter32077031 = new Ya.Metrika({ id:32077031, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/32077031" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<script src="{{ mix('js/app.js') }}"></script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'sAXijBjQv3';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

</body>
</html>