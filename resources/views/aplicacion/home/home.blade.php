@extends('layouts.aplicacion.app')

@section('content')
    <section
            class="d-flex align-items-center position-relative bg-dark bg-size-cover bg-position-center fh-section overflow-hidden pt-6 pb-lg-5"
            style="background-image: url({{asset('img/demo/presentation/intro/bg.jpg')}});">
        <div class="container-fluid pt-4 pb-5 py-lg-5">
            <div class="row align-items-center py-3">
                <div class="col-xl-6 col-lg-5 d-flex justify-content-end">
                    <div class="pt-2 mx-auto mb-5 mb-lg-0 mr-xl-7 text-center text-lg-left"
                         style="max-width: 495px;">
                        <h1 class="display-4 text-light pb-2"><span class="font-weight-light">Have a look </span>Around!
                        </h1>
                        <p class="h4 font-weight-light text-light opacity-70 line-height-base">And you will find
                            everything you need to build a great looking website.</p><a
                                class="d-inline-flex align-items-center text-decoration-none pt-2 mt-4 mb-5"
                                href="#demos" data-scroll><span class="btn btn-icon rounded-circle border-light"><i
                                        class="fe-arrow-down h4 text-light my-1"></i></span><span
                                    class="ml-3 text-light font-weight-medium">View Demos</span></a>
                        <hr class="hr-light mb-5">
                        <div class="row">
                            <div class="col-sm-4 mb-4 mb-sm-0">
                                <div class="h1 text-light mb-1">12</div>
                                <div class="h5 text-light font-weight-normal opacity-70 mb-2">Demo Homepages</div>
                                <span class="badge badge-pill badge-success">More coming</span>
                            </div>
                            <div class="col-sm-4 mb-4 mb-sm-0">
                                <div class="h1 text-light mb-1">50+</div>
                                <div class="h5 text-light font-weight-normal opacity-70 mb-1">Flexible Components</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="h1 text-light mb-1">47</div>
                                <div class="h5 text-light font-weight-normal opacity-70 mb-1">Inner Page Templates</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="cs-parallax ml-lg-n5" style="max-width: 920px;">
                        <div class="cs-parallax-layer position-relative" data-depth="0.1"><img
                                    src="img/demo/presentation/intro/layer01.png" alt="Layer"/>
                        </div>
                        <div class="cs-parallax-layer" style="z-index: 2;" data-depth="0.3"><img
                                    src="img/demo/presentation/intro/layer02.png" alt="Layer"/>
                        </div>
                        <div class="cs-parallax-layer" data-depth="0.2"><img
                                    src="img/demo/presentation/intro/layer03.png" alt="Layer"/>
                        </div>
                        <div class="cs-parallax-layer" style="z-index: 3;" data-depth="0.1"><img
                                    src="img/demo/presentation/intro/layer04.png" alt="Layer"/>
                        </div>
                        <div class="cs-parallax-layer" data-depth="0.15"><img
                                    src="img/demo/presentation/intro/layer05.png" alt="Layer"/>
                        </div>
                        <div class="cs-parallax-layer" style="z-index: 4;" data-depth="0.25"><img
                                    src="img/demo/presentation/intro/layer06.png" alt="Layer"/>
                        </div>
                        <div class="cs-parallax-layer" data-depth="0.3"><img
                                    src="img/demo/presentation/intro/layer07.png" alt="Layer"/>
                        </div>
                        <div class="cs-parallax-layer" data-depth="0.4"><img
                                    src="img/demo/presentation/intro/layer08.png" alt="Layer"/>
                        </div>
                        <div class="cs-parallax-layer" data-depth="0.35"><img
                                    src="img/demo/presentation/intro/layer09.png" alt="Layer"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Demos-->
    <section class="bg-secondary" id="demos">
        <div class="container pt-5 pb-4 py-md-6 py-lg-7">
            <div class="text-center mb-5 pt-3 pt-lg-4">
                <h2 class="h1 mb-4">Homepage <span class='bg-faded-primary rounded text-primary px-3 py-2'>Demos</span>
                </h2>
                <p class="text-muted">Choose from pre-built layouts of our unique homepage demos</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-grid-gutter pb-3"><a class="d-block nav-heading text-center"
                                                                      href="demo-business-consulting.html">
                        <div class="card card-hover border-0 box-shadow-lg mb-4"><img class="card-img"
                                                                                      src="img/demo/presentation/demos/business-consulting.jpg"
                                                                                      alt="Business Consulting"/>
                        </div>
                        <h3 class="h5 nav-heading-title mb-0">Business Consulting</h3><span
                                class="font-size-sm font-weight-normal text-muted">Corpoarate, Business, Agency</span></a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter pb-3"><a class="d-block nav-heading text-center"
                                                                      href="demo-shop-homepage.html">
                        <div class="card card-hover border-0 box-shadow-lg mb-4"><img class="card-img"
                                                                                      src="img/demo/presentation/demos/shop-homepage.jpg"
                                                                                      alt="Shop Homepage"/>
                        </div>
                        <h3 class="h5 nav-heading-title mb-0">Shop Homepage</h3><span
                                class="font-size-sm font-weight-normal text-muted">E-Commerce, Retail, Electronics, Fashion</span></a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter pb-3"><a class="d-block nav-heading text-center"
                                                                      href="demo-booking-directory.html">
                        <div class="card card-hover border-0 box-shadow-lg mb-4"><img class="card-img"
                                                                                      src="img/demo/presentation/demos/booking.jpg"
                                                                                      alt="Booking / Directory"/>
                        </div>
                        <h3 class="h5 nav-heading-title mb-0">Booking / Directory</h3><span
                                class="font-size-sm font-weight-normal text-muted">Listings, Flights, Destinations</span></a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter pb-3"><a class="d-block nav-heading text-center"
                                                                      href="demo-creative-agency.html">
                        <div class="card card-hover border-0 box-shadow-lg mb-4"><img class="card-img"
                                                                                      src="img/demo/presentation/demos/creative-agency.jpg"
                                                                                      alt="Creative Agency"/>
                        </div>
                        <h3 class="h5 nav-heading-title mb-0">Creative Agency</h3><span
                                class="font-size-sm font-weight-normal text-muted">Creative Business, Portfolio, Agency</span></a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter pb-3"><a class="d-block nav-heading text-center"
                                                                      href="demo-web-studio.html">
                        <div class="card card-hover border-0 box-shadow-lg mb-4"><img class="card-img"
                                                                                      src="img/demo/presentation/demos/web-studio.jpg"
                                                                                      alt="Web Studio"/>
                        </div>
                        <h3 class="h5 nav-heading-title mb-0">Web Studio</h3><span
                                class="font-size-sm font-weight-normal text-muted">Web Design, Portfolio, Agency</span></a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter pb-3"><a class="d-block nav-heading text-center"
                                                                      href="demo-product-software.html">
                        <div class="card card-hover border-0 box-shadow-lg mb-4"><img class="card-img"
                                                                                      src="img/demo/presentation/demos/software-landing.jpg"
                                                                                      alt="Product Landing - Software"/>
                        </div>
                        <h3 class="h5 nav-heading-title mb-0">Product Landing - Software</h3><span
                                class="font-size-sm font-weight-normal text-muted">Software, Showcase, Landing Page</span></a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter pb-3"><a class="d-block nav-heading text-center"
                                                                      href="demo-product-gadget.html">
                        <div class="card card-hover border-0 box-shadow-lg mb-4"><img class="card-img"
                                                                                      src="img/demo/presentation/demos/gadget-landing.jpg"
                                                                                      alt="Product Landing - Gadget"/>
                        </div>
                        <h3 class="h5 nav-heading-title mb-0">Product Landing - Gadget</h3><span
                                class="font-size-sm font-weight-normal text-muted">Gadget, Showcase, Landing Page</span></a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter pb-3"><a class="d-block nav-heading text-center"
                                                                      href="demo-mobile-app.html">
                        <div class="card card-hover border-0 box-shadow-lg mb-4"><img class="card-img"
                                                                                      src="img/demo/presentation/demos/mobile-app.jpg"
                                                                                      alt="Mobile App Showcase"/>
                        </div>
                        <h3 class="h5 nav-heading-title mb-0">Mobile App Showcase</h3><span
                                class="font-size-sm font-weight-normal text-muted">Mobile App, Showcase, Landing</span></a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter pb-3"><a class="d-block nav-heading text-center"
                                                                      href="demo-coworking-space.html">
                        <div class="card card-hover border-0 box-shadow-lg mb-4"><img class="card-img"
                                                                                      src="img/demo/presentation/demos/coworking.jpg"
                                                                                      alt="Coworking Space"/>
                        </div>
                        <h3 class="h5 nav-heading-title mb-0">Coworking Space</h3><span
                                class="font-size-sm font-weight-normal text-muted">Coworking Space Landing Page</span></a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter pb-3"><a class="d-block nav-heading text-center"
                                                                      href="demo-event-landing.html">
                        <div class="card card-hover border-0 box-shadow-lg mb-4"><img class="card-img"
                                                                                      src="img/demo/presentation/demos/event-landing.jpg"
                                                                                      alt="Event Landing"/>
                        </div>
                        <h3 class="h5 nav-heading-title mb-0">Event Landing</h3><span
                                class="font-size-sm font-weight-normal text-muted">Landing Page, Event, Countdown, Tickets</span></a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter pb-3"><a class="d-block nav-heading text-center"
                                                                      href="index.html">
                        <div class="card card-hover border-0 box-shadow-lg mb-4"><img class="card-img"
                                                                                      src="img/demo/presentation/demos/template-presentation.jpg"
                                                                                      alt="Web Template Presentation"/>
                        </div>
                        <h3 class="h5 nav-heading-title mb-0">Web Template Presentation</h3><span
                                class="font-size-sm font-weight-normal text-muted">Showcase your Web Template features beautifully</span></a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter pb-3"><a class="d-block nav-heading text-center"
                                                                      href="demo-marketing-seo.html">
                        <div class="card card-hover border-0 box-shadow-lg mb-4"><img class="card-img"
                                                                                      src="img/demo/presentation/demos/marketing-SEO.jpg"
                                                                                      alt="Digital Marketing &amp; SEO"/>
                        </div>
                        <h3 class="h5 nav-heading-title mb-0">Digital Marketing &amp; SEO</h3><span
                                class="font-size-sm font-weight-normal text-muted">Marketing services, Agency, Portfolio</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Components-->
    <section class="bg-gradient py-5 py-md-6 py-lg-7">
        <div class="container-fluid py-3 py-lg-4 overflow-hidden">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-5 d-flex justify-content-end mb-5 mb-lg-0">
                    <div class="mx-auto ml-lg-0 mr-xl-7 text-center text-lg-left" style="max-width: 495px;">
                        <h2 class="h1 text-light mb-4">Flexible <span class='bg-faded-light rounded px-3 py-2'>Components</span>
                        </h2>
                        <p class="text-light opacity-70 mb-5">The complete UI Kit with over 50 modular and highly
                            customizable components: Bootstrap + Around unique elements.</p>
                        <div class="row mb-2 mx-n2">
                            <div class="col-6 px-2 mb-3"><a
                                        class="d-block border border-light rounded-lg pt-3 pb-4 px-3 text-center text-decoration-none"
                                        href="components/carousel.html"><img class="d-inline-block opacity-60 mb-3"
                                                                             width="68"
                                                                             src="img/demo/presentation/icons/carousel.svg"
                                                                             alt="Sliders & Carousels"/>
                                    <h3 class="h6 text-light mb-0">Sliders &amp; Carousels</h3></a></div>
                            <div class="col-6 px-2 mb-3"><a
                                        class="d-block border border-light rounded-lg pt-3 pb-4 px-3 text-center text-decoration-none"
                                        href="components/gallery.html"><img class="d-inline-block opacity-60 mb-3"
                                                                            width="45"
                                                                            src="img/demo/presentation/icons/gallery.svg"
                                                                            alt="Image / Video Gallery"/>
                                    <h3 class="h6 text-light mb-0">Image / Video Gallery</h3></a></div>
                            <div class="col-6 px-2 mb-3"><a
                                        class="d-block border border-light rounded-lg pt-3 pb-4 px-3 text-center text-decoration-none"
                                        href="components/charts.html"><img class="d-inline-block opacity-60 mb-3"
                                                                           width="39"
                                                                           src="img/demo/presentation/icons/chart.svg"
                                                                           alt="Line, Bar & Pie Charts"/>
                                    <h3 class="h6 text-light mb-0">Line, Bar &amp; Pie Charts</h3></a></div>
                            <div class="col-6 px-2 mb-3"><a
                                        class="d-block border border-light rounded-lg pt-3 pb-4 px-3 text-center text-decoration-none"
                                        href="components/video-popup.html"><img class="d-inline-block opacity-60 mb-3"
                                                                                width="44"
                                                                                src="img/demo/presentation/icons/play.svg"
                                                                                alt="Video Popup & Embed"/>
                                    <h3 class="h6 text-light mb-0">Video Popup &amp; Embed</h3></a></div>
                            <div class="col-6 px-2 mb-3"><a
                                        class="d-block border border-light rounded-lg pt-3 pb-4 px-3 text-center text-decoration-none"
                                        href="components/forms.html"><img class="d-inline-block opacity-60 mb-3"
                                                                          width="42"
                                                                          src="img/demo/presentation/icons/forms.svg"
                                                                          alt="Form Controls"/>
                                    <h3 class="h6 text-light mb-0">Form Controls</h3></a></div>
                            <div class="col-6 px-2 mb-3"><a
                                        class="d-block border border-light rounded-lg pt-3 pb-4 px-3 text-center text-decoration-none"
                                        href="components/testimonials.html"><img class="d-inline-block opacity-60 mb-3"
                                                                                 width="46"
                                                                                 src="img/demo/presentation/icons/review.svg"
                                                                                 alt="Testimonials & Reviews"/>
                                    <h3 class="h6 text-light mb-0">Testimonials &amp; Reviews</h3></a></div>
                        </div>
                        <a class="btn btn-success" href="components/typography.html">View All Components</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 d-flex justify-content-end pr-0"><a class="d-block mr-n3"
                                                                                  href="components/hotspots.html"><img
                                class="d-block" src="img/demo/presentation/macbook.png" alt="Components"/></a></div>
            </div>
        </div>
    </section>
    <!-- Inner Pages-->
    <section class="py-5 py-md-6 py-lg-7">
        <div class="container pb-3 pt-4 pb-lg-2">
            <div class="row justify-content-center mb-4 pb-2">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <h2 class="h1 mb-4 text-center">Handcrafted <span
                                class='bg-faded-primary rounded text-primary px-3 py-2'>Inner Pages</span></h2>
                    <p class="text-muted text-center">Big collection of thoroughly designed inner page templates from
                        User Account/Dashboard to Specialty pages like 404 and Coming Soon</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="nav nav-tabs cs-media-tabs justify-content-center justify-content-lg-start"
                        role="tablist">
                        <li class="nav-item mb-3" style="width: 16.5rem;"><a class="nav-link mr-2 active"
                                                                             href="#account" data-toggle="tab"
                                                                             role="tab">
                                <div class="media align-items-center"><img class="rounded" width="60"
                                                                           src="img/demo/presentation/icons/user.svg"
                                                                           alt="User Account"/>
                                    <div class="media-body pl-2 ml-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="font-size-sm pr-1">User Account &amp; Dashboard</div>
                                            <i class="fe-chevron-right lead ml-2 mr-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </a></li>
                        <li class="nav-item mb-3" style="width: 16.5rem;"><a class="nav-link mr-2" href="#portfolio"
                                                                             data-toggle="tab" role="tab">
                                <div class="media align-items-center"><img class="rounded" width="60"
                                                                           src="img/demo/presentation/icons/portfolio.svg"
                                                                           alt="Portfolio"/>
                                    <div class="media-body pl-2 ml-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="font-size-sm pr-1">Portfolio</div>
                                            <i class="fe-chevron-right lead ml-2 mr-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </a></li>
                        <li class="nav-item mb-3" style="width: 16.5rem;"><a class="nav-link mr-2" href="#ecommerce"
                                                                             data-toggle="tab" role="tab">
                                <div class="media align-items-center"><img class="rounded" width="60"
                                                                           src="img/demo/presentation/icons/shopping-cart.svg"
                                                                           alt="E-Commerce"/>
                                    <div class="media-body pl-2 ml-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="font-size-sm pr-1">E-Commerce</div>
                                            <i class="fe-chevron-right lead ml-2 mr-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </a></li>
                        <li class="nav-item mb-3" style="width: 16.5rem;"><a class="nav-link mr-2" href="#pages"
                                                                             data-toggle="tab" role="tab">
                                <div class="media align-items-center"><img class="rounded" width="60"
                                                                           src="img/demo/presentation/icons/web-page.svg"
                                                                           alt="Secondary Pages"/>
                                    <div class="media-body pl-2 ml-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="font-size-sm pr-1">Secondary Pages</div>
                                            <i class="fe-chevron-right lead ml-2 mr-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </a></li>
                        <li class="nav-item mb-3" style="width: 16.5rem;"><a class="nav-link mr-2" href="#blog"
                                                                             data-toggle="tab" role="tab">
                                <div class="media align-items-center"><img class="rounded" width="60"
                                                                           src="img/demo/presentation/icons/blog.svg"
                                                                           alt="Blog & News"/>
                                    <div class="media-body pl-2 ml-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="font-size-sm pr-1">Blog &amp; News</div>
                                            <i class="fe-chevron-right lead ml-2 mr-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </a></li>
                        <li class="nav-item mb-3" style="width: 16.5rem;"><a class="nav-link mr-2" href="#specialty"
                                                                             data-toggle="tab" role="tab">
                                <div class="media align-items-center">
                                    <img class="rounded" width="60"
                                         src="img/demo/presentation/icons/error-404.svg"
                                         alt="Specialty Pages"/>
                                    <div class="media-body pl-2 ml-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="font-size-sm pr-1">Specialty Pages</div>
                                            <i class="fe-chevron-right lead ml-2 mr-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="account">
                            <div class="row text-center text-sm-left">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h3 class="h5 mb-4">User Account</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="account-profile.html">Profile Info</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="account-payment.html">Payment Methods</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="account-notifications.html">Notifications</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="signin-illustration.html">Sign In - Illustration</a>
                                        </li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="signin-image.html">Sign In - Image</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="signin-signup.html">Sign In - Sign Up</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="password-recovery.html">Password Recovery</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="h5 mb-4">Dashboard</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="dashboard-orders.html">Orders</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="dashboard-sales.html">Sales</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="dashboard-messages.html">Messages</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="dashboard-followers.html">Followers</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="dashboard-reviews.html">Reviews</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="dashboard-favorites.html">Favorites</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="portfolio">
                            <div class="row text-center text-sm-left">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h3 class="h5 mb-4">Portfolio Grid</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="portfolio-style-1.html">Grid Style 1</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="portfolio-style-2.html">Grid Style 2</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="portfolio-style-3.html">Grid Style 3</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="h5 mb-4">Single Project</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="portfolio-single-side-gallery-grid.html">Project Side
                                                Gallery (Grid)</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="portfolio-single-side-gallery-list.html">Project Side
                                                Gallery (List)</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="portfolio-single-carousel.html">Project Carousel</a>
                                        </li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="portfolio-single-wide-gallery.html">Project Wide
                                                Gallery</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ecommerce">
                            <div class="row text-center text-sm-left">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h3 class="h5 mb-4">Shop Layouts</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="shop-ls.html">Grid Left Sidebar</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-noneGrid"
                                                            href="shop-rs.html">Right Sidebar</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="shop-ns.html">Grid No Sidebar</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="h5 mb-4">Shop Pages</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="shop-single.html">Single Product</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="checkout.html">Cart &amp; Checkout</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="order-tracking.html">Order Tracking</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pages">
                            <div class="row text-center text-sm-left">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h3 class="h5 mb-4">Inner Pages</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="about.html">About</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-noneGrid"
                                                            href="contacts-v1.html">Contacts v.1</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="contacts-v2.html">Contacts v.2</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="contacts-v3.html">Contacts v.3</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="h5 mb-4">Help Center</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="help-topics.html">Help Topics</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="help-single-topic.html">Single Topic</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="help-submit-request.html">Submit a Request</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="blog">
                            <div class="row text-center text-sm-left">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h3 class="h5 mb-4">Blog Layouts</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="blog-grid-rs.html">Grid Right Sidebar</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-noneGrid"
                                                            href="blog-grid-ls.html">Grid Left Sidebar</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="blog-grid-ns.html">Grid No Sidebar</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="blog-list-rs.html">List Right Sidebar</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="blog-list-ls.html">List Left Sidebar</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="blog-list-ns.html">List No Sidebar</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="h5 mb-4">Single Post</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="blog-single-rs.html">Right Sidebar</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="blog-single-ls.html">Left Sidebar</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="blog-single-ns.html">No Sidebar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="specialty">
                            <div class="row text-center text-sm-left">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h3 class="h5 mb-4">404 Error</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="404-simple.html">Simple Text</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-noneGrid"
                                                            href="404-illustration.html">Illustration</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="h5 mb-4">Coming Soon</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="coming-soon-image.html">Image</a></li>
                                        <li class="mb-3"><a class="font-weight-medium text-decoration-none"
                                                            href="coming-soon-illustration.html">Illustration</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mobile Interface-->
    <section class="bg-secondary py-5 py-md-6 py-lg-7">
        <div class="container py-3 py-lg-4">
            <div class="row align-items-center">
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="mx-auto mx-md-0" style="max-width: 525px;"><img class="d-block"
                                                                                src="img/demo/presentation/mobile-screens.jpg"
                                                                                alt="Mobile screens"/>
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-left">
                    <h2 class="h1 mb-4"><span
                                class='bg-faded-primary rounded text-primary px-3 py-2'>Mobile Friendly</span> Interface
                    </h2>
                    <p class="text-muted mb-5">Around based on advanced fully responsive Bootstrap grid. It looks great
                        at any screen resolution and optimized for small touch screens. Around features 2 types of
                        navigation for handeld devices and off-canvas sidebars that are easily accessible. All sliders
                        used in the template have swipe support.</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start"><img
                                width="120" src="img/demo/presentation/qrcode.png" alt="QR Code"/>
                        <div class="pl-3 pl-sm-4">
                            <div class="text-nav text-left" style="max-width: 175px;">Scan QR code to test on your
                                device
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features-->
    <section class="container py-5 py-md-6 py-lg-7">
        <div class="text-center mb-5 pt-3 pt-lg-4">
            <h2 class="h1">Around <span
                        class='bg-faded-primary rounded text-primary px-3 py-2'>Feature Highlights</span></h2>
        </div>
        <div class="row pt-3 pt-lg-4">
            <div class="col-md-6">
                <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
                    <div class="pl-3">
                        <h3 class="h5">Kick-start Your Development</h3>
                        <p class="font-size-md mb-0">Start your development process fast and easy with Node.js and Gulp
                            setup. Configuration files are included in download package. Full tasks automation.</p>
                    </div>
                </div>
                <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
                    <div class="pl-3">
                        <h3 class="h5">Easy to Customize with Sass</h3>
                        <p class="font-size-md mb-0">Around is built using Sass. Easily change colors, typography and
                            much more. It is the most mature, stable, and powerful CSS extension language in the
                            world.</p>
                    </div>
                </div>
                <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
                    <div class="pl-3">
                        <h3 class="h5">Pug - Node Templating Engine</h3>
                        <p class="font-size-md mb-0">No need to write huge amount of HTML, if you don’t want to. Pug
                            provides features not available in plain HTML like variables, includes, mixins,
                            functions…</p>
                    </div>
                </div>
                <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
                    <div class="pl-3">
                        <h3 class="h5">Built With Latest Bootstrap</h3>
                        <p class="font-size-md mb-0">Around is the powerful e-commerce front-end solution based on
                            Bootstrap 4 - the world's most popular responsive, mobile-first front-end component
                            library.</p>
                    </div>
                </div>
                <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
                    <div class="pl-3">
                        <h3 class="h5">50+ Flexible Components</h3>
                        <p class="font-size-md mb-0">Besides styling all default Bootstrap 4 components Around
                            introduces lots of new flexible, customizable and reusable elements you can use across the
                            website.</p>
                    </div>
                </div>
                <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
                    <div class="pl-3">
                        <h3 class="h5">Mobile Friendly Interface</h3>
                        <p class="font-size-md mb-0">It's not a surprise that nowadays over 70% of users surf the
                            inernet and shop online using their mobile devices. Around is 100% responsive and optimized
                            for small touch screens.</p>
                    </div>
                </div>
                <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
                    <div class="pl-3">
                        <h3 class="h5">Google Fonts</h3>
                        <p class="font-size-md mb-0">Around uses Google fonts which are free, fast to load and of very
                            high quality. Currently Google fonts library includes 900+ font families to choose from.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
                    <div class="pl-3">
                        <h3 class="h5">Touch-enabled Sliders</h3>
                        <p class="font-size-md mb-0">In the era of touch screens it's important to ensure great user
                            experience on handheld devices, especially when it comes to such frequently used interface
                            component as slider.</p>
                    </div>
                </div>
                <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
                    <div class="pl-3">
                        <h3 class="h5">Vector Based HD Ready Icons</h3>
                        <p class="font-size-md mb-0">Around is equiped with font-based icon pack and svg icons to ensure
                            that infographics and interface icons look sharp on any device with any screen resolution
                            and pixel density.</p>
                    </div>
                </div>
                <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
                    <div class="pl-3">
                        <h3 class="h5">W3C Valid HTML Code</h3>
                        <p class="font-size-md mb-0">All HTML files are checked via W3C validator to ensure 100% valid
                            code. As you probably know invalid HTML limits innovation, but Around is innovative at its
                            core.</p>
                    </div>
                </div>
                <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
                    <div class="pl-3">
                        <h3 class="h5">Future-proof JavaScript</h3>
                        <p class="font-size-md mb-0">Around core scripts as well as all dependencies are written in
                            vanilla JS. The only component that requires jQuery is Bootstrap itself. But that will
                            change soon. And whent this happens we will drop jQuery altogether.</p>
                    </div>
                </div>
                <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
                    <div class="pl-3">
                        <h3 class="h5">Detailed Documentation</h3>
                        <p class="font-size-md mb-0">Download package includes links to online documentation. It covers
                            all crucial information about how to get started, customize template and components
                            usage.</p>
                    </div>
                </div>
                <h3 class="h5">...and much more</h3>
            </div>
        </div>
    </section>
@endsection
