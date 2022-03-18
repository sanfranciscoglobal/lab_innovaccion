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
    .carousel-item {min-height: 650px;}

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
            min-height: 180px!important;
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
<section id="home-hero-banner" style="padding-top:150px;">
    @include('slider_support_landing', ['sliderID' => 'hero', 'slides' => 'canabis_y_tecnologia'])

    {{-- <div id="video-gallery-2">
      <a href="https://www.youtube.com/embed/dAJdK0Uu2Ao?controls=0" class="mr-3" loadYoutubeThumbnail='false' style="text-decoration:none;">
        <span class="custom-cs-video-btn custom-cs-video-btn-primary"></span>
        <span style="display: inline-flex;" class="font-size-lg p-2">¿Qué es Thinkia? Mira el video</span>
      </a>
    </div> --}}

</section>
    
    <section style="background-repeat: no-repeat; background-size: auto; background-color: #01375b;">
        <div class="text-center pt-lg-5">
            <h3 class="eventos-titulo text-white">¿De qué va el reto?</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2 pl-lg-8 pr-lg-8  py-lg-4">
                    <div class="row">
                        <div class="col-sm-12 text-white" style="padding-top: 10px!important;">
                            <p class="text-justify" style="font-size: 16px !important;">
                                <strong>Objetivo del reto</strong><br>Este Reto de Innovación busca aportar con instrumentos de medición de THC (y opcionalmente otros cannabinoides), que tanto entidades de control como productores puedan utilizar para realizar mediciones en los cultivos de cáñamo en campo (in situ), sin necesidad de acudir a laboratorios. 
                            <p class="text-justify" style="font-size: 16px !important;">
                                Para esto, el objetivo de este reto de innovación es desarrollar estudios de diseño conceptual, químico e instrumental sobre artefactos que tengan la capacidad de medir el nivel de THC en cultivos de cáñamo en campo.                             </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="">
        <div class="text-center pt-lg-5">
            <h3 class="eventos-titulo">¿Quiénes organizan el reto?  </span></h3>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <p class="text-justify"><strong> La Presidencia de la República de Ecuador</strong>  a través de la Dirección de Institucionalidad y Gestión Pública, representa a la entidad gubernamental responsable de la implementación del compromiso denominado “Laboratorio de Innovación Ciudadana en Ecuador”, en el marco del primer Plan de Acción de Gobierno Abierto Ecuador 2019-2022. Como tal, define y dirige las políticas públicas de la Función Ejecutiva; dirige la administración pública en forma desconcentrada y expide los decretos necesarios para su integración, organización, regulación y control. Busca que la administración pública se rija por los principios de eficacia, eficiencia, calidad jerarquía, desconcentración, descentralización, coordinación, participación, planificación, transparencia y evaluación.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <p class="text-justify"><strong> La Fundación San Francisco Global - SFG,</strong>  contraparte de la sociedad civil responsable de la implementación del compromiso Laboratorio de Innovación Ciudadana en Ecuador, en el marco del PAGA. Esta organización gestiona proyectos que buscan el desarrollo social y económico, potenciando la innovación, y el capital intelectual de las organizaciones mediante la educación, asesoría, gestión y promoción del conocimiento técnico necesario, para procurar el mejoramiento de la calidad de vida de la sociedad y el de su tejido empresarial.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <p class="text-justify"><strong> Red Latinoamericana de Agencias de Innovación - RELAI</strong> creada en abril 2019 en el marco de un proyecto de Cooperación Técnica Regional “RG-T3310”, cuya entidad ejecutora es el Banco Interamericano de Desarrollo (BID). Los principales objetivos de la RELAI se encuentran alineados a: contribuir a la mejora en los procesos de planeamiento, ejecución y evaluación de las políticas de innovación, de manera que la región tenga cada vez más empresas y emprendimientos innovadores que propongan soluciones económicamente viables a desafíos regionales o globales.
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <p class="text-justify"><strong> Programa de las Naciones Unidas para el Desarrollo - PNUD</strong> que provee apoyo técnico a las contrapartes responsables de la implementación del Laboratorio y lidera la implementación de este Reto de Innovación a través de su Laboratorio de Aceleración. PNUD es parte de la red mundial de las Naciones Unidas que trabaja para lograr el desarrollo humano sostenible, impulsando las capacidades y los esfuerzos nacionales para construir una sociedad equitativa a través de la reducción de la pobreza, la promoción de los derechos humanos, y la gobernabilidad democrática. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <p class="text-justify"><strong> Secretaría de Educación Superior, Ciencia, Tecnología e Innovación - SENESCYT</strong> entidad rectora del Sistema Nacional de Ciencia, Tecnología, Innovación y Saberes Ancestrales y entidad a cargo de la coordinación del Sistema Nacional de Educación Superior. Articula la implementación y operación de estos sistemas conjuntamente con los actores que conforman dichos sistemas a través de planes, programas y proyectos que promuevan el acceso equitativo a la educación superior, la formación académica universitaria, politécnica, técnica y tecnológica, el fortalecimiento del talento humano, y la investigación, innovación y transferencia de tecnología.
                        </p>
                        <p class="text-justify">SENESCYT es miembro de la ReLAI desde el 2020 y en ese contexto participa del Programa de Desafíos Comunes que promueve la colaboración e intercambio entre las Agencias miembros de la red en torno a la pandemia del Covid 19, una problemática que produjo efectos socioeconómicos profundos a nivel global.
                        </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" container-fluid pl-lg-8 pr-lg-8 row no-gutters">
            <div class="col-md-12 px-3 order-md-1">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2">
                    <div class="row">
                        <div class="col-sm-12" style="font-size: 16px !important">
                        <p class="text-justify"><strong> Ministerio de Agricultura y Ganadería - MAG,</strong> institución rectora de las políticas públicas agropecuarias, encargada de planificar y generar condiciones que favorezcan la productividad, competitividad y sanidad del sector, con responsabilidad ambiental, a través del impulso del desarrollo de las capacidades técnicas organizativas y comerciales de los productores agropecuarios a nivel nacional con énfasis a los pequeños, medianos y aquellos ligados a la agricultura familiar campesina, contribuyendo a la soberanía alimentaria. Con base a las  licencias y requisitos establecidos en el Acuerdo Ministerial Nro. 109, el MAG es responsable de regular la importación, siembra, cultivo, cosecha, post cosecha, almacenamiento, transporte, procesamiento, comercialización y exportación de materias primas de cannabis no psicoactivo o cáñamo y cáñamo para uso industrial.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

    </section>
    <section style="background-repeat: no-repeat; background-size: auto; background-color: #4caf50;">
        <div class="text-center pt-lg-5 text-white">
            <h3 class="text-white">¿Quiénes pueden participar del Reto?</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-8  py-lg-4 text-white" style="padding-right: 10.5em !important;">
                    <div class="row">
                        <div class="col-sm-12 text-justify" style="padding-top: 40px;">
                            <p style="font-size: 16px !important">Equipos de mínimo 3 personas y máximo 6 personas, que cumplan las siguientes características:</p>
                            <ul class="text-justify" style="font-size: 16px !important">
                                <li>Pueden participar equipos de mínimo 3 personas y máximo 6 personas. Además de quienes conforman el equipo, se espera el acompañamiento de un/a tutor/a a lo largo del reto.</li>
                                <li>El tutor/a es una persona especializada en áreas relacionadas con el objetivo del reto (docente universitario, emprendedor, especialista o similares). Esta persona será contabilizada como adicional a los mínimos y máximos del equipo participante.</li>
                                <li>Todos los miembros del equipo, exceptuando al tutor/a, deberán pertenecer a alguna de estas categorías:</li>
                            </ul>
                            <ul style="font-size: 14px !important; ">
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Ser estudiante cursando su último año de carrera universitaria o técnica.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Ser estudiante cursando sus estudios de posgrado.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Ser egresado.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Ser graduados: haber recibido su título hace máximo 2 años.</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 text-justify" style="padding-top: 10px;">
                            <ul class="text-justify" style="font-size: 16px !important">
                                <li>El equipo debería integrar perfiles diversos y deberá integrar al menos dos perfiles distintos del siguiente listado:</li>
                            </ul>
                            <ul style="font-size: 14px !important; ">
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Perfiles con capacidad de realizar el análisis químico . Por ejemplo: estudiantes de ingeniería química, química pura, entre otros.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Perfiles que tengan la capacidad de realizar el análisis instrumental y de posible ensamblaje del dispositivo. Por ejemplo, estudiante de ingeniería mecánica, ingeniería electrónica, ingeniería industrial, ingeniería en instrumentación y control, entre otros.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Perfiles que tengan la capacidad de contribuir con la generación de presupuestos. Por ejemplo: estudiantes de Finanzas, Administración, entre otros.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Otros perfiles que puedan contribuir con el cumplimiento del objetivo. </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-8 py-lg-4 text-white">
                    <div class="row">
                        <div class="col-sm-6" style="padding-left: 5% !important;padding-top: 10px;">
                            <a class="btn font-weight-bold  text-center text-white" target="_blank" style=" width: 300px; background-color: #01375b;" href="https://drive.google.com/file/d/1qSxSrMCma6IFZNSDPcvexhB9A4_twvvc/view?usp=sharing">Descarga las bases aquí</a>

                        </div>
                        <div class="col-sm-6" style="padding-left: 5% !important; padding-top: 10px;">
                            <a class="btn font-weight-bold  text-center text-white" target="_blank"  style=" width: 300px; background-color: #01375b;" href="https://docs.google.com/forms/d/e/1FAIpQLSekYewtpISGMrP1kORWEax_jxmUqAkIH0i3hjLWz-DH3kVOpg/viewform?usp=send_form">Inscríbete aquí</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-repeat: no-repeat; background-size: auto; background-color: #01375b;">
        <div class="text-center pt-lg-5 text-white">
            <h3 class="text-white">Entregables</span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 py-5 my-sm-0 py-md-2 pl-md-2 pl-lg-8  py-lg-4 text-white" style="padding-right: 10.5em !important;">
                    <div class="row">
                        <div class="col-sm-12 text-justify" style="padding-top: 40px;">
                            <p style="font-size: 16px !important">Al finalizar el reto, cada equipo participante deberá entregar:</p>
                            <ul class="text-justify" style="font-size: 16px !important">
                                <li>Una memoria técnica que incluya al menos:</li>
                            </ul>
                            <ul style="font-size: 14px !important; ">
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">El tipo de tecnología que se utiliza en el prototipo para la detección de THC (y opcionalmente otros cannabinoides),  con su respectiva explicación técnica.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">El aparato de medición tiene que ser portátil y sencillo de utilizar, por lo que es necesario realizar las especificaciones de sus dimensiones y peso.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Descripción y explicación de los materiales y máquinas de ensamblaje que se requerirían para construir un prototipo viable.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Descripción y explicación de los reactivos y substancias que se planea utilizar en el prototipo. Se deben realizar especificaciones en torno a la concentración, pureza, cantidades, entre otros. </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Presupuesto estimado para construir el prototipo, tomando en cuenta los detalles, y especificaciones que comparta el equipo en los puntos anteriores. </span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 text-justify" style="padding-top: 10px;">
                            <ul class="text-justify" style="font-size: 16px !important">
                                <li>El equipo debería integrar perfiles diversos y deberá integrar al menos dos perfiles distintos del siguiente listado:</li>
                            </ul>
                            <ul style="font-size: 14px !important; ">
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Esquema o maqueta 3D sobre el artefacto planteado por el equipo: prototipo en su primera versión.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify">Plano del sistema interno en el que se indiquen partes y/o máquinas de ensamblaje a ser utilizadas en la medición.</span>
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
            <h3 class="eventos-titulo">Propiedad intelectual </span></h3>
        </div>
        <div class="container-fluid row no-gutters">

            <div class="col-md-12">
                <div class="ml-md-auto mr-sm-1 my-sm-0 py-md-2 pl-md-2 pl-lg-8 pr-lg-8  py-lg-4">
                    <div class="row">
                        <div class="col-sm-12" style="padding-top: 10px!important;">
                            <p class="text-justify" style="font-size: 16px !important;">
                            Los derechos de Propiedad Intelectual se manejan bajo una licencia de Creative Commons <strong>Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)</strong> (Atribución-CompartirporIgual 4.0) Internacional. </p>
                            <p class="text-justify" style="font-size: 16px !important;">El equipo ganador y las organizaciones mencionadas serán libres de:
                            </p>
                            <ul style="font-size: 14px !important; ">
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify"><strong>Compartir:</strong> copiar y redistribuir el material en cualquier medio o formato.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify"><strong>Adaptar:</strong> remezclar, transformar y construir sobre el material para cualquier fin, incluso comercial.</span>
                                </li>
                            </ul>
                            <p class="text-justify" style="font-size: 16px !important;">
                            La licencia no puede revocar estas libertades, en tanto se sigan los siguientes términos: </p>
                            <ul style="font-size: 14px !important; ">
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify"><strong>Atribución:</strong> debe otorgar el crédito adecuado, proporcionar un enlace a la licencia e indicar si se realizaron cambios. Puede hacerlo de cualquier manera razonable, pero no de ninguna manera que sugiera que el licenciante lo respalda a usted o su uso.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify"><strong>ShareAlike (compartir por igual:</strong> si remezcla, transforma o construye a partir del material, debe distribuir sus contribuciones bajo la misma licencia que el original.</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fe-check-circle font-size-lg mr-2"></i>
                                    <span class="text-justify"><strong>No hay restricciones adicionales:</strong> o puede aplicar términos legales o medidas tecnológicas que restrinjan legalmente a otros de hacer cualquier cosa que permita la licencia.</span>
                                </li>
                            </ul>
                            <hr></hr>
                            <p>
                                <strong>Más información sobre la licencia Creative Commons Atribución-CompartirporIgual 4.0 Internacional (CC BY-NC 4.0): https://creativecommons.org/licenses/by-sa/4.0/</strong>
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
   {{--  <section class="bg-secondary" id="demos">
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
            <div class="row">
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
            </div>


        </div>
    </section> --}}
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
