@if(!empty($head))
<title>{{ $head['metatitle'] }}</title>
<meta name="keywords" content="{{ $head['metakey'] }}">
<meta name="description" content="{{ $head['metadesc'] }}">
<meta property="og:title" content="{{ $head['metatitle'] }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ url('/files/uploads/3ee149d0c8abe85c9b78ee1b68f0c069.JPG') }}">
<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:description" content="{{ $head['metadesc'] }}">
<meta property="og:determiner" content="auto">
<meta property="og:locale" content="ru_RU">
<meta property="og:site_name" content="russky-style.ru">
@if($head['metacanonical'] != '')
<link rel="canonical" href="{{ $head['metacanonical'] }}">
@endif
@if($head['nofollow'] === 1)
<meta name="robots" content="index, nofollow">
@endif
    @endif

@if(parse_url(request()->url(), PHP_URL_PATH) == '/comments')
    @if(parse_url(request()->fullUrl(), PHP_URL_QUERY) !== Null)
        <meta name="robots" content="noindex, follow">
        <link rel="canonical" href="{{ url('/comments') }}" />

        @if($comments->previousPageUrl() !== Null)
            <link href="{{$comments->previousPageUrl()}}" rel="prev">
        @endif
        @if($comments->nextPageUrl() !== Null)
            <link href="{{$comments->nextPageUrl()}}" rel="next">
        @endif
    @endif
@endif
@if(parse_url(request()->url(), PHP_URL_PATH) == '/news')
    @if(parse_url(request()->fullUrl(), PHP_URL_QUERY) !== Null)
        <meta name="robots" content="noindex, follow">
        <link rel="canonical" href="{{ url('/news') }}" />

        @if($news->previousPageUrl() !== Null)
            <link href="{{$news->previousPageUrl()}}" rel="prev">
        @endif
        @if($news->nextPageUrl() !== Null)
            <link href="{{$news->nextPageUrl()}}" rel="next">
        @endif
    @endif
@endif