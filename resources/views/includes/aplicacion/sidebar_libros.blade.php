@if($archivos)
    <h2 class="fs-22 mb-3 bolder uppercase mt-4">{{ __($libro->titulo) }}</h2>
    <ul class="list-no-style no-padding">
        @foreach($archivos as $_archivo)
            <li>
                <a href="{{route('app.archivo.revista',$_archivo->id) }}" class="
                @if($archivo && $_archivo->id == $archivo->id)
                        text-aqua
                @endif">
                    {{$_archivo->descripcion}}
                </a>
            </li>
        @endforeach
    </ul>
    <hr>
@endif