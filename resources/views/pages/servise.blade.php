@extends('home')
@section('content')
    <div class="container">
        <div class="row">
            {{ Breadcrumbs::render('servise', $servise) }}
            <div class="col s8 l8">
                <div class="section">
                    <div class="row center">
                        <h1>{{ $servise[0]['title'] }}</h1>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        <div class="card comments">
                            <div class="card-image">
                                <img style="max-height: 300px;max-width: 300px;" src="{{ asset($servise[0]['photo']) }}" alt="{{ $servise[0]['title'] }}" title="{{ $servise[0]['title'] }}">
                            </div>
                            <div class="card-content flow-text" style='font-size: 1.3rem;'>

                                {!! $servise[0]['description'] !!}
                                <span class="card-title articles-date" style="font-size: 1.2rem;font-weight: 600;">
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $servise[0]['created_at'])->format('d m Y') }}
                                </span>
                            </div>
                            <h2>Другие услуги</h2>
                            
                                @foreach($servises as $servise)
                                 @if($servise->section == 'head')
                                    <div class="col s12 m4" style="margin: 15px 0;">
                                        <a href="{{ url('/servises/' . $servise->ref) }}">
                                        <div class="col s12 m4">
                                            <img src="{{ asset($servise->photo) }}" height="86" alt="">
                                        </div>
                                        <div class="col s12 m4">
                                            <span style="font-size: 2rem;color: rgba(0,0,0,.87);">{{ $servise->metakey }}</span>
                                        </div>
                                        </a>
                                    </div>
                                  @endif
                               @endforeach
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l4 hide-on-med-and-down">
                <div class="section">
                    <div class="row center">
                        <h3 class="news-h3">Новости</h3>
                    </div>
                    <div class="section">
                        <div class="row">
                            @foreach($news as $new)
                                @include('pages.templates.news_articles')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop