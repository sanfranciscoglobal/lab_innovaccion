@extends('layouts.aplicacion.app')
@section('header-css')
    <style>
        .card {overflow: hidden;}
        .card-lab-orange .card-body * {
            color: white;
        }

        .card-lab-orange .card-body,
        .card-lab-orange .card-body:before {
            background-color: #FF9F40;
        }

        .card:hover .card-hover-info {
            position: absolute;
            display: block
        }
        .card-hover-info {
            display: none;
            z-index: 99;
            background: white;
        }

        .bg-size-contain {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: right;
        }

    </style>
@endsection
@section('content')
<style scoped>
    .carousel-item {min-height: 750px;}

    #video-gallery-2 {
      position: relative;
      display: table;
      cursor: pointer;
      margin: auto;
      z-index: 3;
      padding-top: 100px;
    }

    @media (max-width: 768px) {
        .carousel-item {
            min-height: 350px!important;
            }
        #bannerluces{
            background-image: url({{ asset('img/layout/home/light-bulb-with-drawing-graph_2.jpg')}})!important;
        }
        #video-gallery-2 {
          padding-top: 70px;
        }
    }
    @media (min-width: 992px) and (max-width: 1250px) {
        .itemhome{
            min-width: 50%;
        }
    }
</style>
<section id="home-hero-banner">
    @include('slider_support_landing', ['sliderID' => 'hero', 'slides' => 'home-cambio-climatico'])

    {{-- <div id="video-gallery-2">
      <a href="https://www.youtube.com/embed/dAJdK0Uu2Ao?controls=0" class="mr-3" loadYoutubeThumbnail='false' style="text-decoration:none;">
        <span class="custom-cs-video-btn custom-cs-video-btn-primary"></span>
        <span style="display: inline-flex;" class="font-size-lg p-2">¿Qué es Thinkia? Mira el video</span>
      </a>
    </div> --}}

</section>
    <section style="margin-top: 50px !important; background-color: #ffffff !important;">
    </section>


    <section>
        <div class="text-center pt-lg-5">
            <h3 class="eventos-titulo">Antecedentes</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2 pl-lg-8 pr-lg-8  py-lg-4">
                    <div class="row">
                        <div class="col-sm-6" style="padding-left: 40px;padding-top: 100px;">
                            <img class="text-center" width="500" src="{{ asset('img/landing/climatico-antecedente.png') }}" alt="" />
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px!important;">
                            <p class="text-justify" style="font-size: 16px !important;">
                                Ecuador reconoce al cambio climático como un fenómeno global que pone en riesgo la seguridad, el desarrollo y el bienestar de la población. Es así que, hace más de una década el Gobierno a través del Ministerio del Ambiente, Agua y Transición Ecológica (MAATE) viene realizando esfuerzos por mitigar las emisiones de gases de efecto invernadero (GEI) a nivel nacional y de esta manera reducir la vulnerabilidad de los sistemas sociales, económicos y ambientales
                            <p class="text-justify" style="font-size: 16px !important;">
                                Si bien el MAATE con apoyo de diversas carteras de Estado ha alcanzado importantes avances en la creación de un marco político para la gestión del cambio climático e implementación activa de proyectos e iniciativas de mitigación y adaptación en el territorio, aún existen limitantes o barreras que el país debe superar para lograr afrontar la situación climática global.                             </p>
                            <p class="text-justify" style="font-size: 16px !important;">
                                En este sentido, el MAATE, a través de la Subsecretaría de Cambio Climático, con el soporte del Programa de las Naciones Unidas para el Desarrollo (PNUD) y el apoyo financiero del Fondo Global para el Medio Ambiente (GEF, por sus siglas en inglés), se encuentra implementando el Proyecto “Cuarta Comunicación Nacional (4CN) y el Segundo Informe Bienal de Actualización (2IBA)”.                            </p>
                            <p class="text-justify" style="font-size: 16px !important;">
                                Es así que, se ha considerado prioritario convocar a actores estratégicos públicos, privados, académicos y de sociedad civil para recoger de manera participativa información de las barreras, necesidades y oportunidades de esta problemática que afronta el país en materia de gestión del cambio climático. A través del Reto de Innovación denominado “Cuarta Comunicación Nacional”, se espera obtener insumos de primera mano para promover la toma de decisiones que informen en pro del futuro fortalecimiento de las acciones y estrategias de adaptación y mitigación.
                            </p>
                            <p class="text-justify" style="font-size: 16px !important;">
                                El Proyecto 4CN-2IBA se enmarca en el cumplimiento de los compromisos adquiridos por el Ecuador, como Parte signataria de la Convención Marco de Naciones Unidas sobre el Cambio Climático (CMNUCC) y se enfoca en reportar a la comunidad nacional e internacional los avances del país en materia de institucionalidad, marco regulatorio e implementación de acciones de mitigación, adaptación y medios de implementación (transferencia de tecnología, fortalecimiento de capacidades y financiamiento) que contribuyen a la lucha global contra el cambio climático. A su vez, brinda la oportunidad de informar al mundo sobre las barreras, necesidades y desafíos que afronta el país en la gestión de la mitigación, adaptación y medios de implementación, orientando la búsqueda de soluciones a futuro.
                            </p>
                            <p class="text-justify" style="font-size: 16px !important;">
                                Es así que, se ha considerado prioritario convocar a actores estratégicos públicos, privados, académicos y de sociedad civil para recoger de manera participativa información de las barreras, necesidades y oportunidades de esta problemática que afronta el país en materia de gestión del cambio climático. A través del Reto de Innovación denominado “Identificación de necesidades, barreras y oportunidades para la gestión del Cambio Climático” se espera obtener insumos para promover la toma de decisiones que informen el futuro fortalecimiento de las acciones y estrategias de adaptación, mitigación y medios de implementación.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-image: url({{ asset('img/landing/bk-cambio-climatico-2.png') }});background-repeat: no-repeat; background-size: auto; background-color: #61b3c5;">
        <div class="text-center pt-lg-5 text-white">
            <h3 class="text-white">¿De qué se trata el Reto?</span></h3>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2 py-lg-4 text-white">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <h3 class="text-white">Objetivo Del Reto</h2>
                            <p class="text-justify">El objetivo del reto es construir de manera abierta y participativa la Cuarta Comunicación Nacional sobre Cambio Climático del Ecuador receptando aprendizajes, experiencias e insumos en seis temas específicos:
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                            <ul class="list-unstyled pl-lg-8">
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Contribuciones determinadas a nivel nacional (NDC).</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Acciones de Mitigación Nacionalmente Apropiadas (NAMAs).</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Reducción de Emisiones por Deforestación y Degradación (REDD+).</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Inventarios Nacionales de Gases de Efecto Invernadero (INGEI).</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Medios de implementación.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Medición, Reporte y Verificación (MRV).</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                            <p class="text-justify">Además, el reto busca identificar información relevante en los siguientes ejes transversales: gobernanza, investigación, gestión de conocimiento y transferencia tecnológica.
                            </p>
                        </div>
                        <div class="col-sm-12" style="font-size: 16px !important">
                            <p class="text-justify">Este Reto de Innovación tiene alcance nacional y está dirigida a todos los actores (individuos u organizaciones) con experiencia práctica o teórica en temas de adaptación y mitigación al cambio climático que puedan aportar a la identificación de barreras, necesidades, y oportunidades para la gestión del cambio climático en Ecuador, en el marco de estos 6 ejes.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section style="">
        <div class="text-center pt-lg-5">
            <h3 class="eventos-titulo">¿Quiénes organizan el reto? </span></h3>
        </div>
        <div class="row">
            <div class="col-sm-5">
            </div>
            <div class="col-sm-3">
                <img class="justify-content-center" width="300" src="{{ asset('img/landing/logos/Logo_MAATE.png') }}" alt="" />
            </div>
            <div class="col-sm-3">
            </div>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <p class="text-justify"><strong> Ministerio del Ambiente, Agua y Transición Ecológica (MAATE):</strong> ente rector de la gestión ambiental en el Ecuador cuyos esfuerzos se centran en garantizar un ambiente sano y ecológicamente equilibrado para todos. La institución tiene como acciones prioritarias la conservación de ecosistemas naturales, los recursos hídricos, suelo y aire y la biodiversidad promoviendo el desarrollo sustentable y la justicia social. El MAATE a través del accionar de la Subsecretaría de Cambio Climático funge como autoridad nacional de la gestión del cambio climático en el país.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
            </div>
            <div class="col-sm-3">
                <img class="justify-content-center" width="200" src="{{ asset('img/logo/Logo_Thinkia_1.png') }}" alt="" />
            </div>
            <div class="col-sm-3">
            </div>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2 py-lg-4">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                            <p class="text-justify"><strong> Programa de las Naciones Unidas para el Desarrollo (PNUD)</strong> tiene una posición única dentro del sistema de Naciones Unidas para fomentar la implementación de los Objetivos de Desarrollo Sostenible (ODS) junto a los gobiernos, el sector privado, la sociedad civil y los ciudadanos con soluciones integrales a desafíos complejos. PNUD cuenta con la herramienta Thinkia - lab de innovación para promover la innovación abierta como un método para acelerar los ODS. Esta herramienta  está gerenciada por diversos actores: Fundación San Francisco Global,  OpenlabEC  (sociedad civil), IMPAQTO (privado), EPICO (privado) y FLACSCO CTS Lab (academia).  Para más información: https://thinkialab.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section style="background-repeat: no-repeat; background-size: auto; background-color: #ec9534;">
        <div class="text-center pt-lg-5 text-white">
            <h3 class="text-white">¿Quiénes pueden participar del Reto?</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-8  py-lg-4 text-white">
                    <div class="row">
                        <div class="col-sm-6" style="padding-top: 40px;">
                            <ul class="text-justify" style="font-size: 16px !important">
                                <li>Personas naturales o jurídicas que puedan aportar con insumos concretos para identificar barreras, necesidades y oportunidades en materia de mitigación, adaptación de cambio climático, y medios de implementación del cambio climático.</li>
                                <li>Personas naturales o jurídicas que tengan al menos 1 año de experiencia laboral en uno o más de los siguientes temas:</li>
                            </ul>
                            <ul style="font-size: 14px !important; ">
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Contribuciones determinadas a nivel nacional (NDC).</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Acciones de Mitigación Nacionalmente Apropiadas (NAMAs).</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Reducción de Emisiones por Deforestación y Degradación (REDD+).</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Inventarios Nacionales de Gases de Efecto Invernadero (INGEI).</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Medios de implementación para la gestión del cambio climático (financiamiento climático, fortalecimiento de capacidades y transferencia de tecnología.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Medición, Reporte y Verificación (MRV).</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <img class="justify-content-center" width="400" src="{{ asset('img/landing/climatico-puede-participar.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-8  py-lg-4 text-white ">
                    <div class="row">
                        <div class="col-sm-6" style="padding-left: 10% !important;">
                            <a class="btn font-weight-bold botonmora text-center" target="_blank" style=" width: 300px;" href="Bases_Cambio_Climatico_V3.pdf">Descarga las bases aquí</a>

                        </div>
                        <div class="col-sm-6" style="padding-left: 3% !important;">
                            <a class="btn font-weight-bold botonmora " target="_blank"  style=" width: 300px;" href="https://docs.google.com/forms/d/e/1FAIpQLSfgfPFFC-CGXWAYC8lxRpLBB2wvCB7DPI21Vv9kvfTNsZZUgQ/viewform">Inscríbete aquí</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-repeat: no-repeat; background-size: auto; background-color: #2a8982;">
        <div class="text-center pt-lg-5 text-white">
            <h3 class="text-white">Cronograma</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-8  py-lg-4 text-white">
                    <div class="row">
                        <div class="col-sm-6" style="padding-top: 10%">
                            <p class="text-justify" style="font-size: 16px !important; "> Reto se realizará de forma virtual e incluye las siguientes actividades, las cuales te pedimos leas con detalle para que te organices con tu equipo</p>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled" style="font-size: 16px !important;">
                                <li class="d-flex align-items-center">
                                    <i><img class="justify-content-center" width="80"  style="padding-rigth:5px " alt="" /></i>
                                    <span class="text-justify">&nbsp;&nbsp;Agosto19, 2021: Arranque de proceso de inscripción. </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i><img class="justify-content-center" width="80" src="{{ asset('img/landing/inscripcion-01.png') }}"  alt="" /></i>
                                    <span class="text-justify">&nbsp;&nbsp;Septiembre 2021: Sesión informativa sobre el reto.</span>
                                </li>
                                <li class="d-flex align-items-center" style="padding-top: 20px;">
                                    <i><img class="justify-content-center" width="80" alt="" /></i>
                                    <span class="text-justify">&nbsp;&nbsp;Octubre 8, 2021: Cierre de inscripciones.</span>
                                </li>
                                <hr style="width:70%;text-align:left; margin: 15px;">
                                <li class="d-flex align-items-center">
                                    <i><img class="justify-content-center" width="80" src="{{ asset('img/landing/inscripcion-02.png') }}"   alt="" /></i>
                                    <span class="text-justify">
                                            &nbsp;&nbsp;Octubre 2021: Participación de las personas
                                        <br>&nbsp;&nbsp;u organizaciones inscritos en el
                                        <br>&nbsp;&nbsp;“Laboratorio de conocimiento”
                                        <br>&nbsp;&nbsp; y talleres “Afinando mi conocimiento”.</span>
                                </li>
                                <li class="d-flex align-items-center" style="padding-top: 20px;">
                                    <i><img class="justify-content-center" width="80"  alt="" /></i>
                                    <span class="text-justify">&nbsp;&nbsp;Oct - Nov  2021: Mesas de diálogo.</span>
                                </li>
                                <hr style="width:70%;text-align:left; margin: 15px;">
                                <li class="d-flex align-items-center">
                                    <i><img class="justify-content-center" width="80" src="{{ asset('img/landing/inscripcion-03.png') }}" alt="" /></i>
                                    <span class="text-justify">&nbsp;&nbsp;Noviembre 2021: Ceremonia de agradecimiento.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i><img class="justify-content-center" width="80" alt="" /></i>
                                    <span class="text-justify">&nbsp;&nbsp;Marzo 2022: Lanzamiento de la Cuarta Comunicación Nacional.</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="text-center pt-lg-5">
            <h3 class="eventos-titulo">Reconocimiento</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2 pl-lg-8 pr-lg-8  py-lg-4">
                    <div class="row">
                        <div class="col-sm-12" style="padding-top: 10px!important;">
                            <p class="text-justify" style="font-size: 16px !important;">
                                Las y los participantes serán mencionados a manera de agradecimiento en el documento de la Cuarta Comunicación Nacional de Cambio Climático en el capítulo correspondiente a Barreras, Necesidades, Oportunidades y el Apoyo Recibido para la Gestión del Cambio Climático. Sus nombres e instituciones estarán en los anexos de este documento, bajo el eje de la mesa temática en la que haya contribuido durante el Reto. </p>
                            <p class="text-justify" style="font-size: 16px !important;">Al culminar el Reto de Innovación, el Ministerio de Ambiente, Agua y Transición Ecológica, junto con Thinkia-lab de innovación, entregarán a cada participante un certificado de participación como reconocimiento a su trabajo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section style="background-image: url({{ asset('img/landing/fondo_minga_2.png') }});background-repeat: no-repeat; background-size: auto; background-color: #ec9534;">
        <div class="text-center pt-lg-5 text-white">
            <h3 class="text-white">Propiedad intelectual</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-8 pr-lg-8  py-lg-4 text-white">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="text-justify" style="font-size: 16px !important;">
                                Los derechos de autoría serán del equipo ganador. Los derechos de uso y reproducción serán cedidos a Diálogos Vitales y Thinkia-lab con una licencia Creative Commons  Atribución-NoComercial 4.0 Internacional (CC BY-NC 4.0).
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-justify" style="font-size: 16px !important;">
                                El equipo ganador y las organizaciones mencionadas serán libres de:
                            </p>
                            <ul class="text-justify" style="font-size: 16px !important;">
                                <li> Compartir: copiar y redistribuir el material en cualquier medio o formato.</li>
                                <li> Adaptar: remezclar, transformar y construir a partir del material.</li>
                            </ul>
                            <p class="text-justify" style="font-size: 16px !important;">
                                La licencia no puede revocar estas libertades, en tanto se sigan los siguientes términos:
                            </p>
                            <ul class="text-justify" style="font-size: 16px !important;">
                                <li> Atribución: se debe dar crédito de manera adecuada, brindar un enlace a la licencia, e indicar si se han realizado cambios. Se lo puede hacer en cualquier forma razonable, pero no de forma tal que sugiera que se tiene su uso o tienen el  apoyo de la licenciante.  </li>
                                <li> No comercial: no puede hacerse uso del material con propósitos comerciales.</li>
                                <li>No hay restricciones adicionales: no pueden aplicarse términos legales ni  medidas tecnológicas que restrinjan legalmente a otras a hacer cualquier uso  permitido por la licencia.  </li>
                            </ul>
                            <p class="text-justify" style="font-size: 16px !important;">
                                Más información sobre la licencia Creative Commons Atribución-NoComercial  4.0 Internacional (CC BY-NC 4.0):  https://creativecommons.org/licenses/by-nc/4.0/deed.es
                            </p>
                        </div>
                        <div class="col-sm-6" style="padding-top: 10px">
                            <img width="500" src="{{ asset('img/landing/premio-propiedad-2.png') }}" alt="" style="padding-top: 20px; display: block; margin-left: auto;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Demos-->
    <section class="bg-secondary" id="demos">
        <div class="container pt-5 pb-4 py-md-6 py-lg-7">
            <div class="text-center mb-5 pt-3 pt-lg-4">
                <h3 class=" h2 mb-4 eventos-titulo uppercase">Con el apoyo de:</span>
                </h3>
            </div>
            <div class="row">
                <div class="col-sm-3">

                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="500" src="{{ asset('img/landing/logos/coop-alemana.jpeg') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="500" src="{{ asset('img/landing/logos/LOGOS_GEF_PNUD.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="500" src="{{ asset('img/landing/logos/logo-catar.png') }}" alt="" />
                </div>
                <div class="col-sm-2">

                </div>
            </div>
            {{-- <div class="row">
                <div class="col-sm-1">

                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-09.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-07.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-03.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/REDNI.png') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="200" src="{{ asset('img/landing/logos/LOGOS-MIEMBROS-DE-LA-MINGA-05.png') }}" alt="" />
                </div>
            </div> --}}


        </div>
    </section>
    <!-- Blog-->


    {{-- <section class="container bg-overlay-content pt-5 pt-md-6" style="margin-top: -420px;">
        <h2 class="text-light text-center pt-3 pt-md-2 mb-5 uppercase">Novedades</h2>
        <div class="cs-carousel">
            <div class="cs-carousel-inner"
                data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 16},&quot;850&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 16}, &quot;1100&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 23}}}">
                <!-- Article-->
                @isset($fondos)
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <span class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Fondos</span>
                        <div class="card-body pt-5 px-4 px-xl-5">
                            @if($fondos->fuente)
                                <a class="meta-link font-size-sm mb-2" href="#">Propia</a>
                            @else
                                <a class="meta-link font-size-sm mb-2" href="#">Organización</a>
                            @endif
                            <h3 class="h4 nav-heading mb-4">

                                <a href="#">{{ $fondos->nombre_fondo }}</a>
                            </h3>
                            <div  class="scrollable" style="overflow: hidden; max-height:200px">
                            {{ $fondos->info }}
                            </div>
                        </div>

                        <div class="px-4 px-xl-5 pt-2">
                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile1.jpg') }}"
                                    alt="Sanomi Smith" />
                                <div class="media-body pl-2 ml-1 mt-n1 text-naranja">por<span class="font-weight-semibold ml-1"> {{ $fondos->organizacion }}</span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap">
                                <a class="meta-link font-size-xs text-tomate" href="#">
                                    <i class="fe-calendar mr-1 mt-n1"></i>&nbsp;{{$fondos->fecha_inicio}}
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article-->
                @endisset
                @isset($convocatoria)
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <span class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Convocatorias</span>
                        <div class="card-body pt-5 px-4 px-xl-5">

                            <a class="meta-link font-size-sm mb-2" href="#">{{ $convocatoria->tipoconvocatoriaid->nombre}}</a>

                            <h3 class="h4 nav-heading mb-4">
                                <a href="#">Convocatoria # {{ $convocatoria->id}}</a>
                            </h3>
                            <div  class="scrollable" style="overflow: hidden; max-height:200px">
                            {{ $convocatoria->descripcion}}
                            </div>
                        </div>
                        <div class="px-4 px-xl-5 pt-2">
                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile2.jpg') }}"
                                    alt="Sanomi Smith" />
                                <div class="media-body pl-2 ml-1 mt-n1 text-naranja">por<span class="font-weight-semibold ml-1">{{$convocatoria->user->name}}</span></div>
                            </a>

                            <div class="mt-3 text-right text-nowrap">
                                <a class="meta-link font-size-xs text-tomate" href="#">
                                    <i class="fe-calendar mr-1 mt-n1"></i>&nbsp;{{ $convocatoria->fecha_inicio}}
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                @endisset
                <!-- Article-->
                @isset($iniciativaInfo)
                @isset($iniciativaAutor)
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <span class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Iniciativas</span>
                        <div class="card-body pt-5 px-4 px-xl-5">
                            <a class="meta-link font-size-sm mb-2" href="#">Categoría 1</a>
                            {{-- <h3 class="h4 nav-heading mb-4">
                                <a href="#">{{$iniciativaInfo->nombre_iniciativa}}</a>
                            </h3>
                            {{$iniciativaInfo->descripcion_iniciativa}} --}
                        </div>
                        <div class="px-4 px-xl-5 pt-2">
                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile3.jpg') }}"
                                    alt="Sanomi Smith" />
                                {{-- <div class="media-body pl-2 ml-1 mt-n1 text-naranja">por<span class="font-weight-semibold ml-1">
                                {{ $iniciativaAutor->nombre_organizacion }
                                </span></div> --}
                            </a>
                            <div class="mt-3 text-right text-nowrap">
                                <a class="meta-link font-size-xs text-tomate" href="#">
                                    <i class="fe-calendar mr-1 mt-n1"></i>&nbsp;22 Ago
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                @endisset
                @endisset
                <!-- Article-->
                @isset($materiales)
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <span class="badge badge-lg badge-floating badge-floating-right bg-uva text-white">Publicaciones y herramientas</span>
                        <div class="card-body pt-5 px-4 px-xl-5">
                        @if($materiales->tipo)
                                    <a class="meta-link font-size-sm mb-2" href="#">Publicación</a>
                                @else
                                    <a class="meta-link font-size-sm mb-2" href="#">Herramienta</a>
                                @endif
                            <h3 class="h4 nav-heading mb-4">

                                {{ $materiales->nombre_publicacion }}
                            </h3>
                            <div  class="scrollable" style="overflow: hidden; max-height:200px">
                            {{ $materiales->fuente_publicacion }}
                            </div>
                        </div>
                        <div class="px-4 px-xl-5 pt-2">
                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile4.jpg') }}"
                                    alt="Sanomi Smith" />
                                <div class="media-body pl-2 ml-1 mt-n1 text-naranja">por<span class="font-weight-semibold ml-1">
                                {{ $materiales->autor_publicacion }}
                                </span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap">
                                <a class="meta-link font-size-xs text-tomate" href="#">
                                    <i class="fe-calendar mr-1 mt-n1 "></i>&nbsp;{{ $materiales->fecha_publicacion }}
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                @endisset
            </div>
        </div>
    </section> --}}
    {{-- <div class="bg-secondary" style="margin-top: -300px; padding-top: 300px;"></div> --}}
    <!-- Statistics (Digits)-->
    <section class="container py-5">
        <div class="row pb-lg-4 pt-3 justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0 colornumero">{{ App\Models\Convocatoria::count() }}</h3>
                <p class="text-muted font-size-lg mb-0 colornumero">Convocatorias</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0 colornumero">{{ App\Models\Iniciativas::count() }}</h3>
                <p class="text-muted font-size-lg mb-0 colornumero">Iniciativas</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0 colornumero">{{ App\Models\Fondo::count() }}</h3>
                <p class="text-muted font-size-lg mb-0 colornumero">Fondos </p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0 colornumero">{{ App\Models\MaterialAprendizaje::where('tipo','0')->count() }}</h3>
                <p class="text-muted font-size-lg mb-0 colornumero">Publicaciones</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0 colornumero">{{ App\Models\MaterialAprendizaje::where('tipo','1')->count() }}</h3>
                <p class="text-muted font-size-lg mb-0 colornumero">Herramientas</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0 colornumero">{{ App\Models\Evento::count() }}</h3>
                <p class="text-muted font-size-lg mb-0 colornumero">Eventos</p>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script type="text/javascript">
  lightGallery(document.getElementById('video-gallery'));
  lightGallery(document.getElementById('video-gallery-2'));
</script>
@parent
@stop
