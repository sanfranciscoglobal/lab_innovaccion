@extends('layouts.aplicacion.app')

@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-7">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Categorias</h1>
                <div class="py-4">
                    <p class="cs-callout">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                </div>
                <a class="cs-video-btn cs-video-btn-primary cs-video-btn-sm mr-3"
                    href="https://www.youtube.com/watch?v=hTu0a4o97dU"></a><span class="font-size-sm text-muted">Ver
                    video</span>
            </div>
        </div>
    </section>
    <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 mt-lg-4">
        <!-- LOOP Begins -->
        @for ($i=0; $i<10;$i++)
        <div class="row mb-7 mt-4">
            <div class="col-12 col-lg-8 offset-lg-2 d-flex {{ ($i % 2 == 0) ? '' : 'flex-row-reverse' }}">
                <div class="col-12 col-lg-6">
                    <div class="post-box post-box-thumbnail">
                        <a href="#">
                            <img class="img-fluid rounded" src="https://placehold.it/800x600/?text=Thumbnail" alt="Lorem ipsum dolor sit amet elit">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="post-box post-box-content">
                        <h2>Lorem ipsum dolor sit amet elit</h2>
                        <span class="doc-counter"><?php echo rand(4,21); ?> documentos</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dicta soluta, non voluptatum harum maiores ex doloremque nostrum, possimus quas ducimus quisquam necessitatibus explicabo vero doloribus, eveniet cupiditate commodi rem.</p>
                        <a class="btn btn-primary" href="#">Ver publicaciones</a>
                    </div>
                </div>
            </div>
        </div>
        @endfor
        <!-- LOOP Ends -->
    </section>
@endsection
