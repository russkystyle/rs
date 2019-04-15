{{--<nav aria-label="Page navigation example" style="background-color: #fff;color:#4a4a4a;">--}}
    {{--<ul class="pagination">--}}
        {{--Button previous--}}
        {{--<li class="page-item">--}}
            {{--<a class="page-link" href="{{$results->previousPageUrl()}}" aria-label="Previous">--}}
                {{--<span aria-hidden="true">&laquo;</span>--}}
                {{--<span class="sr-only">Предыдущая</span>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--end button previous--}}
        {{--@for($i = 1; $i <= $results->count(); $i++)--}}
            {{--<li class="page-item"><a class="page-link" href="{{$results->url($i)}}">{{$i}}</a></li>--}}
        {{--@endfor--}}
        {{--{{ $results->render() }}--}}
        {{--Button next--}}
        {{--<li class="page-item">--}}
            {{--<a class="page-link" href="{{$results->nextPageUrl()}}" aria-label="Next">--}}
                {{--<span aria-hidden="true">&raquo;</span>--}}
                {{--<span class="sr-only">Следующая</span>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--end button next--}}
    {{--</ul>--}}
{{--</nav>--}}

@if ($paginator->hasPages())
{{--<nav aria-label="Page navigation example" style="background-color: #fff;color:#4a4a4a;">--}}
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        @else
            <li class="waves-effect"><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="material-icons">chevron_left</i></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="waves-effect"><a href="#!">{{ $element }}</a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a href="#!">{{ $page }}</a></li>
                    @else
                        <li class="waves-effect"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="waves-effect"><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="material-icons">chevron_right</i></a></li>
        @else
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        @endif
    </ul>
</nav>
@endif