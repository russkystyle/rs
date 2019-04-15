<div class="card comments">
    <div class="card-content">
                    <span class="card-title">
                        {{ $new->title }}
                    </span>
        <span class="news-date"><img class="news-img" src="{{ asset('img/img/cal.png') }}" alt="дата" title="data">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $new->created_at)->format('d m Y') }}</span><br>
        {!! str_limit($new->description, 150) !!}
        @if($new->ref != null)
            <a href="{{ url('/new/' . $new->ref) }}">Читать дальше</a>
        @endif
    </div>
</div>