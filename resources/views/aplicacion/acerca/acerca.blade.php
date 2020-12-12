@extends('layouts.aplicacion.app')

<style>

    .bg-size-contain {
        background-size: contain;
        background-repeat: no-repeat;
        background-position: right;
    }

</style>

@section('content')
<br /><br />
    <section class="container my-lg-2 pt-5 pb-lg-7">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5">¿Qué es Thinkia?</h1>
                <div class="py-4">
                    <p class="cs-callout text-justify">Thinkia es un espacio de innovación en donde actores de diversos sectores – público, privado, academia y sociedad civil - se encuentran con el ánimo de trabajar de manera colaborativa compartiendo los retos que afrontan y buscando soluciones basadas en innovación abierta, pública y social. Este espacio creativo de co-creación permite forjar las bases del ecosistema de innovación poniendo en contacto a los agentes innovadores y compartiendo materiales y metodologías que forjen una cultura de innovación. </p>
                </div>
                <a class="cs-video-btn cs-video-btn-primary cs-video-btn-sm mr-3"
                    href="https://www.youtube.com/watch?v=hTu0a4o97dU"></a><span class="font-size-sm text-muted">Ver
                    video</span>
            </div>
            <div class="col-md-6 py-8 bg-size-contain order-md-2 overflow-hidden" style="background-image: url('{{asset('img/img_pages/nosotros.png')}}');">
            </div>
        </div>
    </section>
    <!--
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, commodi incidunt voluptate nisi
                        magnam accusantium possimus suscipit debitis. Consectetur culpa dolorem libero ratione reiciendis
                        similique voluptas saepe placeat eveniet esse. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Est aspernatur laboriosam, libero voluptate doloribus recusandae distinctio maxime, ex nemo
                        architecto magnam. Laboriosam quam beatae iste itaque? Non enim ipsum quasi?</p>
                </div>
            </div>
        </div>
    </section>
    --->

    <section>
        <div class="container">
            <div class="row ">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="{{asset ('images/acerca/image-1.png')}}">
                </div>
                <div class="col-12 col-lg-6 d-flex align-content-center flex-column justify-content-center p-5">
                    <h2>Misión</h2>
                    <p class="text-justify">Consolidar la relación entre agentes innovadores para generar un ecosistema de innovación articulado y promocionar dentro de cada sector - público, privado, academia y sociedad civil
                    – que los retos internos pueden ser resueltos con procesos abiertos de participación pública que busquen soluciones efectivas y ágiles que aporten al bienestar social. </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-lg-6 d-flex align-content-center flex-column justify-content-center">
                    <h2>Visión</h2>
                    <p class="text-justify">Buscar que los procesos de innovación abiertos, públicos y sociales se vuelvan una herramienta clave para la resolución de problemas complejos de desarrollo a nivel nacional. </p>
                    <p class="text-justify">Se requiere involucrar a diversos actores conjugando su inteligencia colectiva para realizar acciones conjuntas que brinden soluciones sostenibles, creativas e inclusivas. </p>
                </div>
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="{{asset('images/acerca/image-2.jpg')}}">
                </div>
            </div>
            <h2 class="justify-content-center center-block text-center">Valores</h2>
            <div class="row ">

                <div class="col-12 col-lg-6">
                    <div class="row" style="align-items: center;">
                    <div class="col-2"><img src="{{asset('images/acerca/Group 312.svg')}}">
                        </div>
                        <div class="col">
                            <h6 class="color-morado">Confianza</h6>
                            <p class="text-justify">Las relaciones entre diversos agentes innovadores deben basarse en la seguridad que se tiene en otros y en sus obras sin perjuicio.</p>
                        </div>
                    </div>
                    <div class="row" style="align-items: center;">
                        <div class="col-2"><img src="{{asset('images/acerca/Group 316.svg')}}">
                        </div>
                        <div class="col">
                            <h6 class="color-morado">Colaboración </h6>
                            <p class="text-justify">Para consolidar las bases del ecosistema de innovación se debe cooperar trabajando en común hacia ese objetivo sumando esfuerzos.</p>
                        </div>
                    </div>
                    <div class="row" style="align-items: center;">
                        <div class="col-2"><img src="{{asset('images/acerca/Group 319.svg')}}">
                        </div>
                        <div class="col">
                            <h6 class="color-morado">Responsabilidad </h6>
                            <p class="text-justify">El trabajo en innovación tanto identificando problemas o soluciones requiere que los actores cumplan con sus compromisos y obligaciones adquiridas ante los demás para garantizar que estos espacios de encuentro sean efectivos y respetuosos. </p>
                        </div>
                    </div>


                </div>
                <div class="col-12 col-lg-6">

                    <div class="row" style="align-items: center;">
                        <div class="col-2"> <img src="{{asset('images/acerca/Group 314.svg')}}">
                        </div>
                        <div class="col">
                            <h6 class="color-morado">Transparencia</h6>
                            <p class="text-justify">Para fortalecer y expandir la cultura de innovación se comunica con claridad el uso que se la da a la información compartida y los compromisos adquiridos por cada actor al participar de convocatorias de identificación de problemas o soluciones. La comunicación es franca y directa entre actores como regla de trabajo en equipo. </p>
                        </div>
                    </div>
                    <div class="row" style="align-items: center;">
                        <div class="col-2"><img src="{{asset('images/acerca/Group 318.svg')}}">
                        </div>
                        <div class="col">
                            <h6 class="color-morado">Creatividad </h6>
                            <p class="text-justify">Los agentes innovadores deben buscar de manera consistente y persistentemente a través de varias iteraciones el encontrar una solución innovadora desarrollando e inventando nuevos conceptos y / o objetos que permitan resolver los problemas de desarrollo identificados.</p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>

    <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 mt-lg-7">

      <h2 class="pb-4 mb-4 text-center">El Equipo</h2>
      <p class="text-center">Thinkia es un espacio neutro que busca integrar diversas miradas y voces de actores de todos los sectores público, privado, academia
           y sociedad civil. La estrategia de innovación y agenda de trabajo de Thinkia es co-creada y co-implementada por el siguiente grupo de aliados.
      </p>
      <br />

      <!-- Card deck -->
      <div class="card-deck">
        <!-- Card -->
        <!-- <div class="card d-none d-sm-block" style="background: none;border: none;"></div> -->
        <!-- Card -->
        <div class="card">
          <img src="{{asset('images/logos/01.png')}}" class="card-img-top" alt="Card image">
          <div class="card-body text-center">
            <h5 class="card-title font-size-xl ">PNUD</h5>
            <p class="card-text font-size-xl ">IMPULSOR</p>
          </div>
          <div class="card-footer font-size-xs text-muted text-center"><a href="https://www.ec.undp.org/" class="btn btn-sm btn-primary">Ver portal web</a></div>
        </div>
        <!-- Card -->
        <div class="card">
          <img src="{{asset('images/logos/02.png')}}" class="card-img-top" alt="Card image">
          <div class="card-body text-center">
            <h5 class="card-title font-size-xl ">FUNDACIÓN SAN FRANCISCO GLOBAL</h5>
            <p class="card-text font-size-xl ">IMPULSOR</p>
          </div>
          <div class="card-footer font-size-xs text-muted text-center"><a href="https://www.sanfranciscoglobal.org" class="btn btn-sm btn-primary">Ver portal web</a></div>
        </div>
        <!-- Card -->
        <div class="card">
          <img src="{{asset('images/logos/03.png')}}" class="card-img-top" alt="Card image">
          <div class="card-body text-center">
            <h5 class="card-title font-size-xl ">IMPAQTO</h5>
            <p class="card-text font-size-xl ">SECTOR PRIVADO</p>
          </div>
          <div class="card-footer font-size-xs text-muted text-center"><a href="https://www.impaqto.net" class="btn btn-sm btn-primary">Ver portal web</a></div>
        </div>
      </div>

      <br /><br /><hr /><br /><br />

      <div class="card-deck">

        <!-- Card -->
        <div class="card">
          <img src="{{asset('images/logos/04.png')}}" class="card-img-top" alt="Card image">
          <div class="card-body text-center">
            <h5 class="card-title font-size-xl ">CTS LAB</h5>
            <p class="card-text font-size-xl ">ACADEMIA</p>
          </div>
          <div class="card-footer font-size-xs text-muted text-center"><a href="https://www.facebook.com/ctslab.flacso.ec" class="btn btn-sm btn-primary">Ver portal web</a></div>
        </div>

        <!-- Card -->
        <div class="card">
          <img src="{{asset('images/logos/05.png')}}" class="card-img-top" alt="Card image">
          <div class="card-body text-center">
            <h5 class="card-title font-size-xl ">EPICO</h5>
            <p class="card-text font-size-xl ">SECTOR PÚBLICO</p>
          </div>
          <div class="card-footer font-size-xs text-muted text-center"><a href="https://epico.gob.ec/" class="btn btn-sm btn-primary">Ver portal web</a></div>
        </div>

        <!-- Card -->
        <div class="card">
          <img src="{{asset('images/logos/06.png')}}" class="card-img-top" alt="Card image">
          <div class="card-body text-center">
            <h5 class="card-title font-size-xl ">OPENLABEC</h5>
            <p class="card-text font-size-xl ">SOCIEDAD CIVIL</p>
          </div>
          <div class="card-footer font-size-xs text-muted text-center"><a href="https://openlab.ec" class="btn btn-sm btn-primary">Ver portal web</a></div>
        </div>

      </div>

      <!-- Card deck -->

    </section>
    <section class="cs-footer jarallax bg-dark pt-5 pt-md-6 pt-lg-7">
        <div class="container pt-3 pt-md-0">
            <div class="row pb-2">
                <form class="col-xl-6 col-lg-7 col-md-7 needs-validation mb-5" action="" novalidate>
                    <h2 class="text-light pb-4">Contáctanos</h2>
                    <div class="input-group-overlay form-group">
                        <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                    class="fe-user"></i></span></div>
                        <input class="form-control prepended-form-control" type="text" placeholder="Nombre" required>
                    </div>
                    <div class="input-group-overlay form-group">
                        <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                    class="fe-mail"></i></span></div>
                        <input class="form-control prepended-form-control" type="email" placeholder="Correo electrónico" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Mensaje" required></textarea>
                    </div>
                    <div class="row pt-2">
                        <div class="col-lg-6 col-md-8">
                            <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
                <div class="col-xl-3 col-lg-4 offset-xl-3 offset-lg-1 col-md-5 mb-5">
                    <h2 class="text-light pb-2">Contacto</h2>
                    <ul class="list-unstyled font-size-sm mb-4 pb-2">
                        <li><a class="nav-link-style nav-link-light"
                                href="mailto:info@laboratoriodeinnovacion.org">hola@thinkialab.org</a></li>

                    </ul>
                    <h3 class="h6 pb-2 text-light">Síguenos en:</h3>
                    <a class="social-btn sb-facebook sb-light sb-lg mr-2 " href="#"><i class="fe-facebook"></i></a>
                    <a class="social-btn sb-twitter sb-light sb-lg mr-2 " href="#"><i class="fe-twitter"></i></a>
                    <a class="social-btn sb-instagram sb-light sb-lg mr-2 " href="#"><i class="fe-instagram"></i></a>
                    <a class="social-btn sb-linkedin sb-light sb-lg mr-2 " href="#"><i class="fe-linkedin"></i></a>
                </div>
            </div>
        </div>
    </section>

@endsection
