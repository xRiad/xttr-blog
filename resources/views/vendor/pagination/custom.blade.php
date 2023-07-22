@if ($paginator->hasPages())
    <div class="row tm-row tm-mt-100 tm-mb-75">
            {{-- Previous Page Link --}}
        <div class="tm-prev-next-wrapper">
            @if ($paginator->onFirstPage())
                <a href="#"  class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"  class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20">Prev</a>
            @endif
        
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"  class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
            @else
                <a href="#" class="mb-2 tm-btn tm-btn-primary disabled tm-prev-next">Next</a>
            @endif
        </div>
            {{-- Pagination Elements --}}
        <div class="tm-paging-wrapper">
            <span class="d-inline-block mr-3">Page</span>
            <nav class="tm-paging-nav d-inline-block">
                <ul>
                @foreach ($elements as $element)
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="tm-paging-item active"><a class="mb-2 tm-paging-link tm-btn">{{ $page }}</a></li>
                            @else
                                <li class="tm-paging-item"><a class="mb-2 tm-btn tm-paging-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                </ul>
            </nav>
        </div>
    </div>
@endif
