<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 24/5/2020
 * Time: 21:02
 */
$menu_items = config('sidebar.backend.menu');
?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('app.dashboard') }}">
        <div class="sidebar-brand-text mx-3"><i class="fas fa-book-reader"></i> Libertad</div>
    </a>

    <hr class="sidebar-divider my-0">

    @foreach ($menu_items as $a=>$section)
        @if($section['title'])
            <div class="sidebar-heading">
                {{$section['title']}}
            </div>
        @endif

        @foreach($section['items'] as $k=>$item)
            <?php
            $class_ = ($item['caret']) ? 'nav-link collapsed' : 'nav-link';
            ?>
            <li class="nav-item">
                <a
                        @if($item['caret'])
                        class="nav-link collapsed"
                        href="#" data-toggle="collapse" data-target="#collapse-{{$a.$k}}"
                        aria-expanded="true" aria-controls="collapseTwo"
                        @else
                        class="nav-link"
                        href="{{route($item['url'])}}"
                        @endif
                >
                    <i class="{{$item['fa-icon']}}"></i>
                    <span>{{$item['title']}}</span>
                </a>

                @if($item['caret'])
                    <div id="collapse-{{$a.$k}}" class="collapse" aria-labelledby="headingTwo"
                         data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Admin {{$item['title']}}:</h6>
                            @foreach($item['items'] as $y=>$subitem)
                                <a class="collapse-item" href="{{route($subitem['url'])}}">
                                    @if($subitem['fa-icon'])
                                        <i class="{{$subitem['fa-icon']}} mr-2"></i>
                                    @endif
                                    {{$subitem['title']}}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </li>

        @endforeach

        <hr class="sidebar-divider">
    @endforeach
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>