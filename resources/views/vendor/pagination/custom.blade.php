@if ($paginator->hasPages())
<div class="pagination_wrap mt-60 pb-0">
    <ul class="pagination_nav unordered_list justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li><span><i class="fas fa-angle-double-left"></i></span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fas fa-angle-double-left"></i></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a class="current_page" href="#!">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fas fa-angle-double-right"></i></a></li>
        @else
            <li><span><i class="fas fa-angle-double-right"></i></span></li>
        @endif
    </ul>
</div>
@endif
