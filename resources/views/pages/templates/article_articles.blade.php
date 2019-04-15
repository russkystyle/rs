<div class="card comments">
    <div class="card-content">
        @if($article->ref != null)
            <a href="{{ url('/article/' . $article->ref) }}" style="color:#000">
        <span class="card-title">
            {{ $article->title }}
        </span>
                    <span class="card-title articles-date" style="font-size: 18px;">
                        <img src="{{ asset('/img/cal.png') }}" alt="дата публикации" height="20">
                        {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->created_at)->format('d m Y') }}
                    </span>
        {!! str_limit($article->description, 300) !!}

            Читать полностью</a>
            @endif
    </div>
</div>