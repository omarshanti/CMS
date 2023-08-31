@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
            @else
                <li class="disabled" aria-disabled="true"><span>@lang('pagination.next')</span></li>
            @endif
        </ul>
    </nav>
@endif


@if ($paginator->hasPages())
@if ($paginator->onFirstPage())
<a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Prefivous</a>
@else
<a class="btn btn-white" href="{{ $paginator->previousPageUrl() }}"><i class="ti-arrow-left fs-9 mr-4"></i> Prefivous</a>
@endif
@if ($paginator->hasMorePages())
<a class="btn btn-white" href="{{ $paginator->nextPageUrl() }}">Next <i class="ti-arrow-right fs-9 ml-4"></i></a>
            @else
            <a class="btn btn-white" href="#">Next<i class="ti-arrow-right fs-9 ml-4"></i></a>
            @endif