@extends('home')
@section('content')
<div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center" style="height: 75vh;">
          <img src="{{asset('img/new-sayt-404.png')}}">
            <h3><i class="mdi-content-send brown-text"></i><a href="{{ url('/') }}">На главную</a></h3>
        </div>
      </div>
    </div>
</div>
@stop

