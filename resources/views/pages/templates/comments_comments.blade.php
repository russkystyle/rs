<div class="card comments">
    <div class="card-content">
        <span class="card-title">
            {{ $comment->name }}
        </span>
        <span class="card-title">
            {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->format('d m Y') }}
        </span>
        <span class="card-title">
            {{ $comment->title }}
        </span>
        @if($comment->media != '' && $comment->media_type != 1)
            <img class="responsive-img" src="{{ asset($comment->media) }}" alt="{{ $comment->title }}">
            @elseif($comment->media_type == 1)
            <div class="video-container">
            <iframe src="{{ asset($comment->media) }}" width="600" height="300" style="position:absolute;width:100%;height:100%;left:0" frameborder="0" allowfullscreen></iframe>
            </div>
        @endif
        {!! $comment->description !!}
    </div>
</div>