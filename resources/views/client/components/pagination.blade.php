@if ($paginator->hasPages())
    <div class="page-nav-wrap text-center">
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="arrow left disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a href=""><i class="far fa-chevron-double-left"></i></a>
                </li>
            @else
                <li class="arrow left">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        <i class="far fa-chevron-double-left"></i>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true">
                        <span>{{ $element }}</span>
                    </li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page">
                                <a>{{ $page }}</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="arrow right">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <i class="far fa-chevron-double-right"></i>
                    </a>
                </li>
            @else
                <li class="arrow right disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a>  <i class="far fa-chevron-double-right"></i></a>
                </li>
            @endif
        </ul>
    </div>
@endif
