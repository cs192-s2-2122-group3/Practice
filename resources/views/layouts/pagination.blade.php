@if ($paginator->hasPages())
    <div class="ht-80 bd pd-x-20 d-flex align-items-center justify-content-between">
        @if ($paginator->onFirstPage())
            <ul class="pagination pagination-basic mg-b-0">
                <li class="page-item disabled">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Next">
                        <i class="fa fa-angle-left"></i>
                    </a>
                </li>
            </ul>
        @else
            <ul class="pagination pagination-basic mg-b-0">
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Next">
                        <i class="fa fa-angle-left"></i>
                    </a>
                </li>
            </ul>
        @endif
        
        <ul class="pagination pagination-basic mg-b-0">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item mg-r-7 mg-l-7 active"><a class="page-link" href="#">{{ $page }}</a></li>
                        @else
                            <li class="page-item mg-r-7 mg-l-7"><a class="page-link hidden-xs-down" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>

        @if ($paginator->hasMorePages())
            <ul class="pagination pagination-basic mg-b-0">
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        @else
            <ul class="pagination pagination-basic mg-b-0">
                <li class="page-item disabled">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        @endif
    </div>
@endif