@extends('layouts.aplicacion.app')

@section('content')
    <section class="position-relative bg-gradient" style="height: 590px;">
        <div class="cs-shape cs-shape-bottom cs-shape-curve-side bg-body">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 250">
                <g>
                    <path fill="currentColor"
                          d="M3000,0v250H0v-51c572.7,34.3,1125.3,34.3,1657.8,0C2190.3,164.8,2637.7,98.4,3000,0z">

                    </path>
                </g>
            </svg>
        </div>
    </section>
    <!-- Contact details + Form-->
    <section class="container bg-overlay-content pt-7" style="margin-top: -590px;">
        <div class="row pt-md-4 pt-lg-5 mt-3">
            <div class="col-lg-4 col-md-5 offset-lg-1">
                <h1 class="text-light mb-3 pb-4 pt-sm-3">Contacts</h1>
                <div class="d-flex mb-4"><i class="fe-map-pin h3 mb-2 text-light mt-1"></i>
                    <div class="pl-3">
                        <p class="text-light mb-2">
                            396 Lillian Blvd, Holbrook,<br>NY 11741, USA
                        </p>
                        <a class="cs-fancy-link text-light font-size-sm" href="#map" data-scroll>See on the map</a>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <i class="fe-mail h3 mb-2 text-light"></i>
                    <div class="pl-3">
                        <a class="d-inline-block text-light text-decoration-none mb-2"
                           href="mailto:contact@example.com">contact@example.com</a>
                    </div>
                </div>
                <div class="d-flex mb-4"><i class="fe-phone h3 mb-2 text-light"></i>
                    <div class="pl-3"><a class="d-inline-block text-light text-decoration-none mb-2"
                                         href="tel:+15262200459">+1 526 220 0459</a></div>
                </div>
            </div>
            <div class="col-xl-6 col-md-7">
                <div class="card border-0 box-shadow-lg">
                    <div class="card-body py-5 px-3 px-sm-4">
                        <h2 class="h3 text-center">Drop us a line</h2>
                        <p class="font-size-sm text-muted text-center">We normally respond within 2 business days</p>
                        <form action="{{route('app.contacto.store')}}" class="needs-validation pt-2 px-md-3" method="POST" novalidate>
                            @method('POST')
                            @include('aplicacion.contact._form', compact('contacto'))
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map + Directions-->
    <section class="container py-5 py-md-6 py-lg-7">
        <div class="row py-sm-3">
            <div class="col-md-7">
                <div class="cs-gallery" id="map">
                    <a class="cs-gallery-item cs-map-popup bg-position-center bg-no-repeat py-7 text-center border rounded-lg"
                       href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91476818218!2d-74.11976253858133!3d40.69740344296443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sua!4v1568574342685!5m2!1sen!2sua"
                       data-iframe="true"
                       data-sub-html="&lt;h6 class=&quot;font-size-sm text-light&quot;&gt;396 Lillian Blvd, Holbrook, NY 11741&lt;/h6&gt;"
                       style="background-image: url({{asset('img/pages/contacts/map03.png')}});">
                        <span class="cs-gallery-caption">
                            <i class="fe-maximize-2 font-size-xl mt-n1 mr-2"></i>Expand the map
                        </span>
                        <div class="d-inline-block py-4 py-sm-7">
                            <img width="48" src="{{asset('img/pages/contacts/marker.png')}}" alt="Map marker"/>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 offset-md-1 pt-4">
                <h2 class="h4 pb-3">How to get there</h2>
                <h3 class="h5">Subway</h3>
                <ul class="list-unstyled font-size-sm">
                    <li>5 mins south 66 St. Lincoln Center</li>
                    <li>10 mins west 59 St. Columbus Circus</li>
                </ul>
                <h3 class="h5">Busses</h3>
                <ul class="list-unstyled font-size-sm mb-4 pb-2">
                    <li>Public busses #43 and #38</li>
                </ul>
                <h2 class="h4 pb-2">Working hours</h2>
                <ul class="list-unstyled font-size-sm">
                    <li><span class="text-heading font-size-base mr-1">Mon - Fri:</span>9AM - 8PM</li>
                    <li><span class="text-heading font-size-base mr-1">Sat:</span>10AM - 5PM</li>
                    <li>
                        <span class="text-heading font-size-base mr-1">Sun:</span>
                        <span class="text-danger">Closed</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
