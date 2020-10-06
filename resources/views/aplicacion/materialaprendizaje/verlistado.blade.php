@extends('layouts.aplicacion.app')

@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-7">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Listado General</h1>
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
    <div class="cs-sidebar-enabled cs-sidebar-right">
        <div class="container">
            <div class="row">
                <!-- Content-->
                <div class="col-lg-9 cs-content py-4 mb-2 mb-sm-0 pb-sm-5">
                    <!--
                    <nav aria-label="breadcrumb">
                        <ol class="py-1 my-2 breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">List right sidebar</li>
                        </ol>
                    </nav>
                    <h1 class="mb-5">Blog</h1>
                -->
                    <!-- Post-->
                    <div class="row">
                        <div class="col">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet assumenda, sit reiciendis nemo impedit quos laborum iusto, magnam id dolorem corrupti earum eius. Eligendi culpa nihil error voluptate temporibus expedita. Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus expedita natus, tempore, pariatur voluptas illum velit iure quidem nam sit eius dolore quae suscipit soluta harum! Id maxime modi eveniet.</p>
                        </div>
                    </div>
                    <article class="card card-horizontal card-hover mb-grid-gutter"><a class="card-img-top"
                            href="blog-single-rs.html" style="background-image: url(img/blog/01.jpg);"></a>
                        <div class="card-body"><a class="meta-link font-size-sm mb-2" href="#">Digital design</a>
                            <h2 class="h4 nav-heading mb-4"><a href="blog-single-rs.html">Designers should always keep their
                                    users in mind</a></h2><a class="media meta-link font-size-sm align-items-center pt-3"
                                href="#"><img class="rounded-circle" width="36" src="img/blog/avatar/01.jpg"
                                    alt="Emma Brown" />
                                <div class="media-body pl-2 ml-1 mt-n1">por<span class="font-weight-semibold ml-1">Emma
                                        Brown</span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap"><a class="meta-link font-size-xs" href="#"><i
                                        class="fe-message-square mr-1"></i>&nbsp;6</a><span class="meta-divider"></span><a
                                    class="meta-link font-size-xs" href="#"><i class="fe-calendar mr-1 mt-n1"></i>&nbsp;Feb
                                    19</a></div>
                        </div>
                    </article>
                    <!-- Post-->
                    <article class="card card-horizontal card-hover mb-grid-gutter"><a class="card-img-top order-sm-2"
                            href="blog-single-rs.html" style="background-image: url(img/blog/02.jpg);"></a>
                        <div class="card-body order-sm-1"><a class="meta-link font-size-sm mb-2" href="#">Technology</a>
                            <h2 class="h4 nav-heading mb-4"><a href="blog-single-rs.html">How technological advancements
                                    affect our decisions</a></h2><a
                                class="media meta-link font-size-sm align-items-center pt-3" href="#"><img
                                    class="rounded-circle" width="36" src="img/blog/avatar/03.jpg" alt="Jessica Miller" />
                                <div class="media-body pl-2 ml-1 mt-n1">por<span class="font-weight-semibold ml-1">Jessica
                                        Miller</span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap"><a class="meta-link font-size-xs" href="#"><i
                                        class="fe-message-square mr-1"></i>&nbsp;3</a><span class="meta-divider"></span><a
                                    class="meta-link font-size-xs" href="#"><i class="fe-calendar mr-1 mt-n1"></i>&nbsp;Feb
                                    4</a></div>
                        </div>
                    </article>
                    <!-- Post-->
                    <article class="card card-horizontal card-hover mb-grid-gutter"><a class="card-img-top"
                            href="blog-single-rs.html" style="background-image: url(img/blog/03.jpg);"></a>
                        <div class="card-body"><a class="meta-link font-size-sm mb-2" href="#">Business</a>
                            <h2 class="h4 nav-heading mb-4"><a href="blog-single-rs.html">Open space - new trend in office
                                    design</a></h2><a class="media meta-link font-size-sm align-items-center pt-3"
                                href="#"><img class="rounded-circle" width="36" src="img/blog/avatar/05.jpg"
                                    alt="Daniel Adams" />
                                <div class="media-body pl-2 ml-1 mt-n1">por<span class="font-weight-semibold ml-1">Daniel
                                        Adams</span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap"><a class="meta-link font-size-xs" href="#"><i
                                        class="fe-message-square mr-1"></i>&nbsp;12</a><span class="meta-divider"></span><a
                                    class="meta-link font-size-xs" href="#"><i class="fe-calendar mr-1 mt-n1"></i>&nbsp;Jan
                                    10</a></div>
                        </div>
                    </article>
                    <!-- Post-->
                    <article class="card card-horizontal card-hover mb-grid-gutter"><a class="card-img-top order-sm-2"
                            href="blog-single-rs.html" style="background-image: url(img/blog/04.jpg);"></a>
                        <div class="card-body order-sm-1"><a class="meta-link font-size-sm mb-2" href="#">Travel &amp;
                                Vacation</a>
                            <h2 class="h4 nav-heading mb-4"><a href="blog-single-rs.html">Escape to mountains with only one
                                    backpack</a></h2><a class="media meta-link font-size-sm align-items-center pt-3"
                                href="#"><img class="rounded-circle" width="36" src="img/blog/avatar/01.jpg"
                                    alt="Emma Brown" />
                                <div class="media-body pl-2 ml-1 mt-n1">por<span class="font-weight-semibold ml-1">Emma
                                        Brown</span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap"><a class="meta-link font-size-xs" href="#"><i
                                        class="fe-message-square mr-1"></i>&nbsp;31</a><span class="meta-divider"></span><a
                                    class="meta-link font-size-xs" href="#"><i class="fe-calendar mr-1 mt-n1"></i>&nbsp;Dec
                                    25</a></div>
                        </div>
                    </article>
                    <!-- Post-->
                    <article class="card card-horizontal card-hover mb-grid-gutter"><a class="card-img-top"
                            href="blog-single-rs.html" style="background-image: url(img/blog/05.jpg);"></a>
                        <div class="card-body"><a class="meta-link font-size-sm mb-2" href="#">Technology</a>
                            <h2 class="h4 nav-heading mb-4"><a href="blog-single-rs.html">Payments made easy. How new Tech
                                    will affect E-Commerce industry?</a></h2><a
                                class="media meta-link font-size-sm align-items-center pt-3" href="#"><img
                                    class="rounded-circle" width="36" src="img/blog/avatar/02.jpg" alt="Charlie Welch" />
                                <div class="media-body pl-2 ml-1 mt-n1">por<span class="font-weight-semibold ml-1">Charlie
                                        Welch</span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap"><a class="meta-link font-size-xs" href="#"><i
                                        class="fe-message-square mr-1"></i>&nbsp;4</a><span class="meta-divider"></span><a
                                    class="meta-link font-size-xs" href="#"><i class="fe-calendar mr-1 mt-n1"></i>&nbsp;Dec
                                    12</a></div>
                        </div>
                    </article>
                    <!-- Post-->
                    <article class="card card-horizontal card-hover mb-grid-gutter"><a class="card-img-top order-sm-2"
                            href="blog-single-rs.html" style="background-image: url(img/blog/06.jpg);"></a>
                        <div class="card-body order-sm-1"><a class="meta-link font-size-sm mb-2" href="#">Business</a>
                            <h2 class="h4 nav-heading mb-4"><a href="blog-single-rs.html">Business offices of Fortune 500
                                    companies</a></h2><a class="media meta-link font-size-sm align-items-center pt-3"
                                href="#"><img class="rounded-circle" width="36" src="img/blog/avatar/06.jpg"
                                    alt="Barbara Palson" />
                                <div class="media-body pl-2 ml-1 mt-n1">por<span class="font-weight-semibold ml-1">Barbara
                                        Palson</span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap"><a class="meta-link font-size-xs" href="#"><i
                                        class="fe-message-square mr-1"></i>&nbsp;31</a><span class="meta-divider"></span><a
                                    class="meta-link font-size-xs" href="#"><i class="fe-calendar mr-1 mt-n1"></i>&nbsp;Dec
                                    25</a></div>
                        </div>
                    </article>
                    <!-- Pagination-->
                    <div class="d-md-flex justify-content-between align-items-center pt-3 pb-2">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <label class="pr-1 mr-2">Mostrar</label>
                            <select class="form-control custom-select mr-2" style="width: 5rem;">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                            </select>
                            <div class="font-size-sm text-nowrap pl-1 mb-1">publicaciones por página</div>
                        </div>
                        <nav class="mb-4" aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><i
                                            class="fe-chevron-left"></i></a></li>
                                <li class="page-item d-sm-none"><span class="page-link page-link-static">2 / 10</span></li>
                                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active d-none d-sm-block" aria-current="page"><span
                                        class="page-link">2<span class="sr-only">(current)</span></span></li>
                                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                                <li class="page-item d-none d-sm-block">...</li>
                                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">10</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i
                                            class="fe-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Sidebar-->
                <div class="cs-sidebar col-lg-3 pt-lg-5">
                    <div class="cs-offcanvas-collapse cs-offcanvas-right" id="blog-sidebar">
                        <div class="cs-offcanvas-cap navbar-box-shadow px-4 mb-3">
                            <h5 class="mt-1 mb-0">Ver mas</h5>
                            <button class="close lead" type="button" data-toggle="offcanvas"
                                data-offcanvas-id="blog-sidebar"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="cs-offcanvas-body px-4 pt-3 pt-lg-0 pr-lg-0 pl-lg-2 pl-xl-4" data-simplebar>
                            <!-- Search-->
                            <div class="cs-widget mb-5">
                                <h3 class="cs-widget-title">Buscar</h3>
                                <div class="input-group-overlay">
                                    <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                                class="fe-search"></i></span></div>
                                    <input class="form-control prepended-form-control" type="text" placeholder="Search">
                                </div>
                            </div>
                            <!-- Categories-->
                            <div class="cs-widget cs-widget-categories mb-5">
                                <h3 class="cs-widget-title">Categorías</h3>
                                <ul>
                                    <li><a class="cs-widget-link" href="#">Innovación<small
                                                class="text-muted pl-1 ml-2">23</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Innovación abierta<small
                                                class="text-muted pl-1 ml-2">14</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Design Thinking<small
                                                class="text-muted pl-1 ml-2">7</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Tecnología<small
                                                class="text-muted pl-1 ml-2">19</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Fondos<small
                                                class="text-muted pl-1 ml-2">35</small></a></li>
                                    <li><a class="cs-widget-link" href="#">Servicios &amp; Vacation<small
                                                class="text-muted pl-1 ml-2">28</small></a></li>
                                </ul>
                            </div>
                            <!-- Featured posts-->
                            <div class="cs-widget mt-n1 mb-5">
                                <h3 class="cs-widget-title pb-1">Publicaciones en tendencia</h3>
                                <div class="media align-items-center pb-1 mb-3"><a class="d-block" href="#"><img
                                            class="rounded" width="64" src="img/blog/th01.jpg" alt="Post" /></a>
                                    <div class="media-body pl-2 ml-1">
                                        <h4 class="font-size-md nav-heading mb-1"><a class="font-weight-medium"
                                                href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h4>
                                        <p class="font-size-xs text-muted mb-0">por John Doe</p>
                                    </div>
                                </div>
                                <div class="media align-items-center pb-1 mb-3"><a class="d-block" href="#"><img
                                            class="rounded" width="64" src="img/blog/th02.jpg" alt="Post" /></a>
                                    <div class="media-body pl-2 ml-1">
                                        <h4 class="font-size-md nav-heading mb-1"><a class="font-weight-medium" href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a></h4>
                                        <p class="font-size-xs text-muted mb-0">por Susan Mayer</p>
                                    </div>
                                </div>
                                <div class="media align-items-center"><a class="d-block" href="#"><img class="rounded"
                                            width="64" src="img/blog/th03.jpg" alt="Post" /></a>
                                    <div class="media-body pl-2 ml-1">
                                        <h4 class="font-size-md nav-heading mb-1"><a class="font-weight-medium"
                                                href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h4>
                                        <p class="font-size-xs text-muted mb-0">por Daniel Adams</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
