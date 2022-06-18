@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
                                    {{-- <ul class="pagination">

                            <li class="pagination__item"><span>1</span></li>

                            <li class="pagination__item"><span>4</span></li>
                            <li class="pagination__item"><span>5</span></li>

                            <li class="pagination__item"><span>12</span></li>
                        </ul> --}}
            @if ($paginator->onFirstPage())
            @else
                <li class="pagination__item pagination__item--prev">
                    <a href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')">
                        <i class="fa fa-angle-left" aria-hidden="true"></i><span>Back</span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="pagination__item pagination__item--disabled">{{ $element }}</li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pagination__item pagination__item--active"><span>{{ $page }}</span></li>
                        @else
                            <li class="pagination__item"><span><a href="{{ $url }}">{{ $page }}</a></span></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="pagination__item pagination__item--next">
                    <a href="{{ $paginator->nextPageUrl() }}">
                        <span>Next</span><i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </li>
            @else
            @endif
        </ul>
    </nav>
@endif
