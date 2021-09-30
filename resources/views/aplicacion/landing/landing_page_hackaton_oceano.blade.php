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
    .carousel-item {min-height: 550px;}

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
          padding-top: 150px;
        }
    }
    @media (min-width: 992px) and (max-width: 1250px) {
        .itemhome{
            min-width: 50%;
        }
    }
</style>
<section id="home-hero-banner" style="padding-top:150px;">
    @include('slider_support_landing', ['sliderID' => 'hero', 'slides' => 'home-hackaton-por-el-oceano'])

    {{-- <div id="video-gallery-2">
      <a href="https://www.youtube.com/embed/dAJdK0Uu2Ao?controls=0" class="mr-3" loadYoutubeThumbnail='false' style="text-decoration:none;">
        <span class="custom-cs-video-btn custom-cs-video-btn-primary"></span>
        <span style="display: inline-flex;" class="font-size-lg p-2">¿Qué es Thinkia? Mira el video</span>
      </a>
    </div> --}}

</section>
    <section style="margin-top: 50px !important; background-color: #ffffff !important;">
    </section>


    <section style="background-image: url({{ asset('img/landing/mares_home_antecedentes.png') }});background-repeat: no-repeat; background-size: auto; background-color: #0f1b33;">
        <div class="text-center pt-lg-5">
            <h3 class="eventos-titulo text-white">Antecedentes</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2 pl-lg-8 pr-lg-8  py-lg-4">
                    <div class="row">
                        <div class="col-sm-12 text-white" style="padding-top: 10px!important;">
                            <p class="text-justify" style="font-size: 16px !important;">
                                Ecuador ha sido uno de los primeros y pocos países del mundo que ha reconocido a la naturaleza como sujeto de derecho. A pesar de que  la mayor parte del territorio nacional se encuentra en el océano, estos esfuerzos de protección se han focalizado mayormente en la parte continental del país. El océano es particularmente relevante por su extensa biodiversidad marina que brinda un sin número de servicios para el bienestar humano, los cuales no están recibiendo la atención necesaria. 
                            <p class="text-justify" style="font-size: 16px !important;">
                                Años de experiencia nos han permitido identificar y documentar las causas del bajo cuidado que se da a  nuestro mar territorial, entre las que destacan la mala gestión de desperdicios plásticos, la pesca incidental y la falta de capacidad para hacer frente a estas amenazas en la sociedad ecuatoriana. Las ideas innovadoras e interdisciplinarias pueden contribuir en gran medida a resolver estos  problemas.                             </p>
                            <p class="text-justify" style="font-size: 16px !important;">
                                Con base a estos antecedentes y conociendo  que nuestro país presenta un déficit de emprendimientos ambientales innovadores enfocados a resolver problemas reales ligados al océano, buscamos poner sobre la mesa estos asuntos. Así, realizaremos una hackatón donde acompañaremos a los grupos participantes en la construcción de emprendimientos ambientales que busquen aportar a solucionar problemas oceánicos a través de herramientas innovadoras.                             </p>
                            <p class="text-justify" style="font-size: 16px !important;">
                                Las hackatones, al ser espacios de creación colaborativa, ofrecen una oportunidad para alcanzar metas orientadas a innovación con recursos limitados. Estos se han convertido en una estrategia mundial de innovación, metodología acertada para el objetivo que buscamos con la realización de este “HACKATÓN POR EL OCÉANO”.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="text-center pt-lg-5 ">
            <h3>¿Cuál es el objetivo del reto?</span></h3>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-6 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2 py-lg-4">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        
                            <p class="text-justify">
                                El objetivo del Hackatón es incentivar a los participantes a desarrollar un emprendimiento ambiental en cualquier de estas dos categorías:
                            </p>
                            <p class="text-justify">
                                i) contaminación marina por plásticos<br>
                                ii) reducción de pesca incidental
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                            <p class="text-justify">Para encontrar soluciones innovadoras a estas dos grandes problemáticas oceánicas utilizaremos metodologías de design thinking (pensamiento de diseño) y definiremos el problema a partir de   bases de datos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2 py-lg-4 text-white">
                    <img class="justify-content-center" width="400" src="{{ asset('img/landing/obejtivo_mares.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <hr>

    <section style="">
        <div class="text-center pt-lg-5">
            <h3 class="eventos-titulo">¿Quiénes organizan el reto?  </span></h3>
        </div>
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <img class="justify-content-center" style="padding-left: 100px !important" width="500" src="{{ asset('img/landing/logos/soa_Ecuador.png') }}" alt="" />
            </div>
            <div class="col-sm-3">
            </div>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <p class="text-justify"><strong> Sustainable Ocean Alliance (SOA)</strong> es una organización con presencia en 165 países que busca soluciones a problemas oceánicos a través de aceleradores y financiamientos. El capítulo de SOA en Ecuador se creó  en el 2020 con jóvenes líderes de diferentes provincias de nuestro país. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <img class="justify-content-center" style="padding-left: 100px !important" width="500" src="{{ asset('img/landing/logos/mingas-04.png') }}" alt="" />
            </div>
            <div class="col-sm-3">
            </div>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <p class="text-justify"><strong> Fundación Mingas por el Mar</strong> es una organización sin fines de lucro enfocada en programas de educación ambiental y ciencia ciudadana, con el objetivo de promover mejores hábitos y la reducción del consumo. Iniciando actividades en 2016 como un grupo de la sociedad civil, Mingas por el Mar logró estatus de fundación en 2019. Actualmente está conformada por más de 300 voluntarios organizados en 23 grupos a nivel nacional. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <img class="justify-content-center" style="padding-left: 100px !important" width="500" src="{{ asset('img/landing/logos/DisenaFuturo_azul.png') }}" alt="" />
            </div>
            <div class="col-sm-3">
            </div>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <p class="text-justify"><strong> Diseña Futuro</strong> es una empresa social sin fines de lucro, representante exclusivo de Design for Change en Ecuador, que potencia la capacidad de crear y la mentalidad “Yo Puedo” de las personas. Diseña Futuro facilita experiencias de diseño que les permite a los participantes actuar frente a los desafíos de su comunidad, mientras desarrollan habilidades del siglo XXI. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <img class="justify-content-center" style="padding-left: 100px !important" width="500" src="{{ asset('img/logo/Logo_Thinkia_1.png') }}" alt="" />
            </div>
            <div class="col-sm-3">
            </div>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <p class="text-justify"><strong> Thinkia - lab de innovación</strong> es la herramienta con la cual cuenta el <strong>Programa de las Naciones Unidas para el Desarrollo (PNUD)</strong> para promover la innovación abierta como un método para acelerar los objetivos de desarrollo sostenible. Esta herramienta está gerenciada por diversos actores: Fundación San Francisco Global y OpenlabEC (sociedad civil), IMPAQTO (privado), EPICO (privado) y FLACSCO CTS Lab (academia).
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

    </section>
    <section style="background-repeat: no-repeat; background-size: auto; background-color: #0082b8;">
        <div class="text-center pt-lg-5 text-white">
            <h3 class="text-white">¿Quiénes pueden participar del Reto?</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-8  py-lg-4 text-white">
                    <div class="row">
                        <div class="col-sm-6" style="padding-top: 40px;">
                            <p style="font-size: 16px !important">Equipos de mínimo 3 personas y máximo 6 personas, que cumplan las siguientes características:</p>
                            <ul class="text-justify" style="font-size: 16px !important">
                                <li>Personas entre 17 y 35 años que residan en Ecuador y que sientan un gran compromiso hacia la conservación y protección del océano.</li>
                                <li>Personas que cumplan con alguno de estos perfiles (revisar el punto 4 de las bases para mayor información):</li>
                            </ul>
                            <ul style="font-size: 14px !important; ">
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Perfiles con capacidad de liderar, organizar, coordinar, implementar y administrar un equipo de trabajo.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Perfiles con capacidad de diseñar, desarrollar estrategias de comunicación, generar alianzas y buscar inversores.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Perfiles con capacidad de llevar la contabilidad, hacer propuestas de inversión, y administrar fondos.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Perfiles con capacidad de desarrollar soluciones tecnológicas, manejar big data, combinar diversas fuentes de información y realizar prototipos centrados en el usuario.</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <img class="justify-content-center" width="400" src="{{ asset('img/landing/participa_5_mares.png') }}" alt="" />
                        </div>
                        <div class="col-md-12" style="padding-top: 10px;">
                            <ul class="text-justify" style="font-size: 16px !important">
                                <li>El equipo debe tener como objetivo contribuir con al menos uno  de estos desafíos (revisar el punto 5 de las bases para mayor información):</li>
                            </ul>
                            <p style="font-size: 16px !important"><strong>Categoría I: Contaminación plástica</strong></p>
                        </div>
                        <div class="col-sm-6" style="padding-top: 0px;">
                            
                            <ul class="text-justify" style="font-size: 16px !important">
                                <li><strong>Desafío 1:</strong> Prevención de contaminación por macro y micro plásticos en ecosistemas marinos por una mala gestión de desechos del turismo y/o pesca.</li>
                                <li><strong>Desafío 2:</strong> Recuperación de ecosistemas marinos afectados por la contaminación por macro y micro plásticos por una mala gestión de desechos del turismo y/o pesca.</li>
                                <li><strong>Desafío 3:</strong> Reducción y detección de varamientos  de especies marinas causadas por intoxicación con desperdicios plásticos origen del turismo o pesca.</li>
                            </ul>
                        </div>
                        <div class="col-sm-6" style="padding: 0px;">
                            <img class="justify-content-center" width="280" src="{{ asset('img/landing/participa_mares_01.png') }}" alt="" />
                        </div>
                        <div class="col-md-12">
                            <p style="font-size: 16px !important"><strong>Categoría II: Pesquería incidental</strong></p>
                        </div>
                        <div class="col-sm-6" style="padding-top: 0px;">
                            <ul class="text-justify" style="font-size: 16px !important">
                                <li><strong>Desafío 1:</strong>Reducción de pesca de especies protegidas no objetivos de pesca a través de innovaciones tecnológicas que puedan ser utilizadas en pesca artesanal, semi-industrial e industrial.</li>
                                <li><strong>Desafío 2:</strong> Detección de pesca ilegal, no declarada y no reglamentada a través de innovaciones tecnológicas que puedan ser utilizadas en pesca artesanal, semi-industrial e industrial.</li>
                                <li><strong>Desafío 3:</strong> Promoción de alternativas a la pesca ilegal:  consumo de pesca responsable, innovaciones en procesos de acuicultura marina o desarrollo de nuevas fuentes de alimentación marina basadas en algas marinas o cultivo de células.
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <img class="justify-content-center" width="400" src="{{ asset('img/landing/participa_mares.png') }}" alt="" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-8  py-lg-4 text-white ">
                    <div class="row">
                        <div class="col-sm-6" style="padding-left: 10% !important;">
                            <a class="btn font-weight-bold  text-center text-white" target="_blank" style=" width: 300px; background-color: #80a2bd;" href="https://drive.google.com/file/d/10stbmMDVz1d6xJpRpLRJ3pYWsW_0Isgb/view?usp=sharing">Descarga las bases aquí</a>

                        </div>
                        <div class="col-sm-6" style="padding-left: 3% !important;">
                            <a class="btn font-weight-bold  text-center text-white" target="_blank"  style=" width: 300px; background-color: #80a2bd;" href="https://forms.gle/prixcQV1i2cVR4GCA">Inscríbete aquí</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-repeat: no-repeat; background-size: auto; background-color: #94c2fe;">
        <div class="text-center pt-lg-5 text-white">
            <h3 class="text-white">Cronograma</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                 <img class="justify-content-center" src="{{ asset('img/landing/cronograma.jpeg') }}" alt="" />
                
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
                        <div class="col-sm-6" style="padding-top: 10px!important;">
                            <p class="text-justify" style="font-size: 16px !important;">
                            El equipo con mayor puntuación en cada categoría (dos equipos en total) recibirá una mentoría por parte de SOA Ecuador y Mingas por el Mar con el fin de que fortalezcan sus propuestas y apliquen al Ocean Solutions Accelerator en el 2022. </p>
                            <p class="text-justify" style="font-size: 16px !important;">Certificado en la metodología por parte de Diseña Futuro: los miembros del equipo que hayan completado todas las horas de capacitación de la Hackatón, recibirán a título personal una certificación de 15 horas en Design Thinking (Pensamiento de Diseño) por su participación en la Hackatón. Esta certificación consta con el aval de la red global Design for Change. Además, tendrán acceso al toolkit (kit de herramientas) con lecturas y recursos adicionales y optativamente, serán parte de la red de Innovadores Sociales de Diseña Futuro
                            </p>
                        </div>
                         <div class="col-sm-6">
                            <img class="justify-content-center" width="400" src="{{ asset('img/landing/recocimiento_mares_01.png') }}" alt="" />
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
                <h3 class=" h2 mb-4 eventos-titulo uppercase">Financiado por:</span>
                </h3>
            </div>
            <div class="row">
                <div class="col-sm-3">

                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="500" src="{{ asset('img/landing/logos/coop-alemana.jpeg') }}" alt="" />
                </div>
                <div class="col-sm-2">
                    <img class="justify-content-center" width="500" src="{{ asset('img/landing/logos/soa_Ecuador.png') }}" alt="" />
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
