@extends('index')
@section('content')
<div class="col-xs-12 info2"  style="background-color:#f8f8f8;">
    <div class="col-xs-8" style="background-color:#f8f8f8;">
      <div class="reviews_order">
          <div class="reviews_order_form">
              <p class="reviews_order_header">Оставить отзыв</p>
              {!! Form::open(['url' => 'review/store', 'enctype' => 'multipart/form-data']) !!}
                 <input name="name" type="text" style="width:420px;" value="Ваше имя">
                  <input name="email" type="text" style="width:420px;" value="Ваш email">
                  <input name="phone" type="text" style="width:420px;" value="Ваш телефон">
                  <input name="message" style="width:420px;height:150px;" value="Ваше сообщение">
                  
                 
                  <input type="submit" class="button" style="margin:20px 0 0 20px;width:260px;" value="Оставить отзыв">
              {!! Form::close() !!}
              
          </div>
      </div>
      @foreach($reviews as $review)
        <div class="review">
             <p class="reviews_name">{{$review->name}}</p>
            <p class="reviews_date">{{$review->updated_at}}</p>
            <p class="reviews_text">{{$review->message}}</p>
            @if($review->slug == 'img')
            <a href="{{asset($review->path)}}" class="fancybox" rel="{{$review->id}}">
            <img src="{{asset($review->path)}}" height="202" width="142" alt="">
            </a>
            @elseif($review->slug == 'video')
            <iframe width="460" height="297" src="https://www.youtube.com/embed/X0NQf9Z2aF4" frameborder="0" allowfullscreen></iframe>
            @endif
        </div>
      @endforeach
    </div>   
<!--    right menu-->
    <div class="col-xs-4" style="background-color: #f8f8f8;">
        <p class="reviews_news_header">Новости</p>
        @foreach($news as $new)
            
            <p class="reviews_news_title">{{$new['title']}}</p>
            <p class="reviews_news_date">
                <img src="img/cal.png" class="reviews_news_img" alt="">{{$new['updated_at']}}</p>
            <p class="reviews_news_text">{{$new['text']}}</p>
            <p class="reviews_news_folow"><a href="{{url('news/' . $new['id'])}}">Далее</a></p>
        @endforeach
       
    </div>
</div>
@stop

