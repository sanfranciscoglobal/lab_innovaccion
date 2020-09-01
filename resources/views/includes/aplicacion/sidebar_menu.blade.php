<h2 class="fs-22 mb-3 bolder uppercase mt-4">{{ __('Menu') }}</h2>
<ul class="list-no-style no-padding">
    @foreach($menu as $item=>$link)
        <li>
            <a href="{{$link}}">{{$item}}</a>
        </li>
    @endforeach
    {{--<li><a href="{{route('app.dashboard')}}">Mi perfil</a></li>--}}
</ul>