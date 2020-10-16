@if ($paginator->hasPages())
    <nav class="d-md-flex justify-content-between align-items-center text-center text-md-left pt-grid-gutter">
        {{--<nav>--}}
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                       aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                       aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
    @php
        $xvalue =  $paginator->currentPage()*$paginator->perPage();
        $xvalue = ($xvalue > $paginator->total())?$paginator->total():$xvalue;
        $porcentaje = ($paginator->total()>0) ? round((($xvalue*100)/$paginator->total())) : 0 ;
    @endphp
    <div class="d-md-flex align-items-center w-100">
        <span class="font-size-sm text-muted mr-md-3">
            Mostrando {{$xvalue}} de {{$paginator->total()}} registros</span>
        <div class="progress w-100 my-3 mx-auto mx-md-0" style="max-width: 10rem; height: 4px;">
            <div class="progress-bar" role="progressbar" style="width: {{$porcentaje}}%;" aria-valuenow="{{$xvalue}}"
                 aria-valuemin="0" aria-valuemax="{{$paginator->total()}}">

            </div>
        </div>
    </div>
@endif
