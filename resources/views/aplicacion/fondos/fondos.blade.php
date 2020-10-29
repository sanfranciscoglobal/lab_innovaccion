@extends('layouts.aplicacion.app')
@section('header-css')
<style>
    .card-lab-orange .card-body * { color: white; }
    .card-lab-orange .card-body,
    .card-lab-orange .card-body:before { background-color: #FF9F40; }
</style>
@endsection
@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-7">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5">Fondos</h1>
                <div class="py-4">
                    <p class="cs-callout">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <h2 class="h3 text-center">Agentes de cooperación</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, commodi incidunt voluptate nisi magnam accusantium possimus suscipit debitis. Consectetur culpa dolorem libero ratione reiciendis similique voluptas saepe placeat eveniet esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aspernatur laboriosam, libero voluptate doloribus recusandae distinctio maxime, ex nemo architecto magnam. Laboriosam quam beatae iste itaque? Non enim ipsum quasi?</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam accusantium voluptatem pariatur minima earum sequi, autem, alias, dolorum totam excepturi mollitia eveniet ut corrupti exercitationem explicabo incidunt debitis possimus sapiente.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 mt-lg-7">
        <div class="row mb-3 mt-4">
            @foreach ($fondos as $fondo)
            @php
                $img = isset($fondo->imagen) ? $fondo->imagen : '';
                $img = Storage::disk('fondos')->exists($img) ? asset('storage/'.$img) : asset('img/logo/thinkia_color_no_slogan.svg');
            @endphp
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-lab-orange card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;">
                    <a class="card-floating-icon" href="mailto:sarah.cole@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient">
                        <img src="{{ $img }}" alt="{{ $fondo->organizacion }}" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">{{ $fondo->organizacion }}</h3>
                        <p class="font-size-xs  mb-0">{{ $fondo->nombre_fondo }} <br>{{ $fondo->info }} </p>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-lab-orange card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;">
                    <a class="card-floating-icon" href="mailto:charlie.welch@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient">
                        <img src="http://placehold.it/280x300/?text=Agente" alt="Charlie Welch" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Agente de cooperación</h3>
                        <p class="font-size-xs  mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-lab-orange card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;">
                    <a class="card-floating-icon" href="mailto:emma.brown@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient">
                        <img src="http://placehold.it/280x300/?text=Agente" alt="Emma Brown" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Agente de cooperación</h3>
                        <p class="font-size-xs  mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-lab-orange card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;">
                    <a class="card-floating-icon" href="mailto:rosalie.lyons@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient">
                        <img src="http://placehold.it/280x300/?text=Agente" alt="Rosalie Lyons" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Agente de cooperación</h3>
                        <p class="font-size-xs  mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-lab-orange card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;">
                    <a class="card-floating-icon" href="mailto:jane.tanaka@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient">
                        <img src="http://placehold.it/280x300/?text=Agente" alt="Jane Tanaka" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Agente de cooperación</h3>
                        <p class="font-size-xs  mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-lab-orange card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;">
                    <a class="card-floating-icon" href="mailto:sanomi.smith@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient">
                        <img src="http://placehold.it/280x300/?text=Agente" alt="Sanomi Smith" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Agente de cooperación</h3>
                        <p class="font-size-xs  mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-lab-orange card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;">
                    <a class="card-floating-icon" href="mailto:olivia.jones@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient">
                        <img src="http://placehold.it/280x300/?text=Agente" alt="Olivia Jones" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Agente de cooperación</h3>
                        <p class="font-size-xs  mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-lab-orange card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;">
                    <a class="card-floating-icon" href="mailto:richard.davis@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient">
                        <img src="http://placehold.it/280x300/?text=Agente" alt="Richard Davis" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Agente de cooperación</h3>
                        <p class="font-size-xs  mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

@endsection
