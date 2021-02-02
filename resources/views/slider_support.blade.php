@section('header-css')
@parent
    <style>

        #video-gallery {
            transform: translateY(280%);
        }
        @media (max-width: 768px) {
          #video-gallery {
              transform: translateY(75%);
          }
        }

    </style>
@endsection

@php
    $slides = config('common_sliders.' . $slides);
    if ( !isset ( $sliderID ) ) $sliderID = 'carouselExampleCaptions';
    $size = ( !isset ( $size ) ) ? 'medium' : $size;
@endphp
@if ( !isset ( $slides )  )
<div class="row">
    <div class="col">
        <div class="slider-error alert alert-danger" role="alert">
            <p>Por favor indique el indice del Slider. Puede conseguir los indices en el archivo de configuracion <code>common_sliders.php</code> en la carpeta config del proyecto.</p>
            <p>Para mas información haga clic <a href="https://github.com/sanfranciscoglobal/colaboratorio/wiki/Slider-Support" target="_blank">aqui.</a></p>
        </div>
    </div>
</div>
@else
@if (count( $slides ) == 0)
<div class="row">
    <div class="col">
        <div class="slider-error alert alert-warning" role="alert">
            <p><strong>¡El Slider seleccionado no tiene slides!.</strong> Puede agregar slides en el archivo de configuracion <code>common_sliders.php</code> en la carpeta config del proyecto.</p>
            <p>Para mas información haga clic <a href="https://github.com/sanfranciscoglobal/colaboratorio/wiki/Slider-Support" target="_blank">aqui.</a></p>
        </div>
    </div>
</div>
@else
<div id="{{ $sliderID }}" class="{{ $sliderID }} carousel slider-{{ $size }} {{ (count( $slides ) > 1) ? 'slide' : '' }}" data-ride="carousel">

    <div class="carousel-inner">
        @foreach ($slides as $index => $slide)
        @php
            $styles = '';
            if ( !empty( $slide['background_image_url'] ) )
                $styles .= 'background-image:url('.$slide['background_image_url'].'); ';

            if ( !empty( $slide['background_blend_mode'] ) )
                $styles .= 'background-blend-mode:'.$slide['background_blend_mode'].'; ';

            if ( !empty( $slide['background_position'] ) )
                $styles .= 'background-position:'.$slide['background_position'].'; ';

            if ( !empty( $slide['background_size'] ) )
                $styles .= 'background-size:'.$slide['background_size'].'; ';

            $target = '';
            if ( $slide['open_new_tab'] ) $target = 'target=_blank ';
        @endphp

        @if ( isset($slide['tipo']) && $slide['tipo'] == 'imagen' )
        <div
            class="carousel-item  {{ $index == 0 ? 'active': ''}} bkg-{{ !empty( $slide['background_color'] ) ? $slide['background_color'] : 'aqua' }}"
            style="{{ $styles }}">
            <div class="carousel-caption text-{{ !empty( $slide['text_color'] ) ? $slide['text_color'] : 'center' }} ">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 slide-container {{ !empty( $slide['content_classes'] ) ? $slide['content_classes'] : '' }}">
                            <h2 class="fs-36 bolder">{!! $slide['title'] !!}</h2>
                            <p class="fs-22">{!! $slide['content'] !!}</p>
                            @if ( $slide['show_button'] )
                            <a class="btn btn-shadow bkg-{{ !empty( $slide['button_background'] ) ? $slide['button_background'] : 'aqua' }} text-{{ !empty( $slide['button_text_color'] ) ? $slide['button_text_color'] : 'white' }} fs-18" href="{{ $slide['button_url'] }}" {{ $target }}>{{ $slide['button_title'] }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @elseif ( isset($slide['tipo']) && $slide['tipo'] == 'solo_fondo' )
        <div
            class="carousel-item  {{ $index == 0 ? 'active': ''}} bkg-{{ !empty( $slide['background_color'] ) ? $slide['background_color'] : 'aqua' }} text-center"
            style="{{ $styles }} max-height: 750px; top: 130px;">
            <div class="home-video-overlay"></div>

            <div id="video-gallery" style="position: relative;display: inline-block;cursor: pointer; z-index: 3;">
              <a href="https://www.youtube.com/embed/dAJdK0Uu2Ao?controls=0" class="mr-3" loadYoutubeThumbnail='false' style="text-decoration:none;">
                <span class="custom-cs-video-btn custom-cs-video-btn"></span>
                <span style="display: inline-flex;" class="font-size-lg text-light p-2">¿Qué es Thinkia? Ver video</span>
              </a>
            </div>

        </div>
        @elseif ( isset($slide['tipo']) && $slide['tipo'] == 'video_mp4' )
        <div
            class="carousel-item  {{ $index == 0 ? 'active': ''}} bkg-{{ !empty( $slide['background_color'] ) ? $slide['background_color'] : 'aqua' }} text-center"
            style="background-position: center;background-size: cover;max-height: 750px;top: 130px;">
            <div class="home-video-overlay"></div>

            <div id="video-gallery" style="position: relative;display: inline-block;cursor: pointer; z-index: 3;">
              <a href="https://www.youtube.com/embed/A3pwoj719yY?controls=0" class="mr-3" loadYoutubeThumbnail='false' style="text-decoration:none;">
                <span class="custom-cs-video-btn custom-cs-video-btn"></span>
                <span style="display: inline-flex;" class="font-size-lg text-light p-2">¿Qué es Thinkia? Ver video</span>
              </a>
            </div>

            <video autoplay muted loop id="myVideo" style="width:100%;max-height: 450px;">
              <source src="{{ $slide['video_url'] }}" type="video/mp4">
            </video>
        </div>
        @elseif ( isset($slide['tipo']) && $slide['tipo'] == 'video_youtube' )
        <div style="max-height: 750px;">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe style="top: 80px;" class="embed-responsive-item" src="https://www.youtube.com/embed/A3pwoj719yY?autoplay=1&mute=1&loop=1&controls=0&start=25" frameborder=”0″ allowfullscreen></iframe>
            </div>
        </div>
        @endif

        @endforeach
    </div>
    @if (count( $slides ) > 1)
    <ol class="carousel-indicators">
        @for ($i = 0; $i < count( $slides ); $i++)
        <li data-target="#{{ $sliderID }}" data-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}"></li>
        @endfor
    </ol>
    @endif
</div>
<!-- END Home slider-->
@endif
@endif
