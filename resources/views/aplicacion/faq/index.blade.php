@extends('layouts.aplicacion.app')

<style>

    .bg-size-contain {
        background-size: contain;
        background-repeat: no-repeat;
        background-position: right;
    }

</style>

@section('content')
<br /><br /><br />
    <section class="container my-lg-2 pt-5 pb-lg-7">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5"></h1>
                <div class="py-4">
                    <p class="cs-callout">Consulas tus preguntas frecuentes y condiciones de uso</p>
                </div>
                {{-- <a class="cs-video-btn cs-video-btn-primary cs-video-btn-sm mr-3"
                    href="https://www.youtube.com/embed/oAzGvQ_2RYM?controls=0"></a><span class="font-size-sm text-muted">Ver
                    video</span> --}}
            </div>
            <div class="col-md-6 mt-3 py-8 bg-size-contain order-md-2 overflow-hidden" style="background-image: url('{{asset('img/img_pages/uso.png')}}');">
            </div>
        </div>

    </section>
    <section>
        <div class="container">
            <div class="tent-center flex-column justify-content-center row mt-5 mb-5">
                <h2 >Preguntas Frecuentes</h2>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <!-- Accordion made of cards -->
                    <div class="accordion" id="accordionExample">

                        <!-- Card -->
                        <div class="card">
                        <div class="card-header" id="headingOne">
                            <h3 class="accordion-heading">
                            <a href="#collapseOne" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                Pregunta 1
                                <span class="accordion-indicator"></span>
                            </a>
                            </h3>
                        </div>
                        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                             Respuesta 1 At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                            </div>
                        </div>
                        </div>

                        <!-- Card -->
                        <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h3 class="accordion-heading">
                            <a href="#collapseTwo" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                Pregunta 2
                                <span class="accordion-indicator"></span>
                            </a>
                            </h3>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Respuesta 2 At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                            </div>
                        </div>
                        </div>

                        <!-- Card -->
                        <div class="card">
                        <div class="card-header" id="headingThree">
                            <h3 class="accordion-heading">
                            <a href="#collapseThree" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                Pregunta 3
                                <span class="accordion-indicator"></span>
                            </a>
                            </h3>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Respuesta 3  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="tent-center flex-column justify-content-center row mt-5 mb-5">
                <h2 >Términos y Condiciones</h2>
            </div>
            <div class="row mt-5 mb-5" style="overflow: scroll!important;max-height:500px">


                <div class="d-flex align-content-center flex-column justify-content-center">

                    <p class="text-justify">
                    Los siguientes términos y condiciones se refieren a las reglas de uso del Sitio Web <a href="www.thinkialab.com">www.thinkialab.com</a>
                    Al utilizar las funcionalidades del sitio web y navegar en las distintas páginas de la plataforma, usted acepta y está de acuerdo con estos términos y condiciones, de acuerdo a lo que se describe en los siguientes numerales:
                    </p>
                    <ol type="1">
                        <li class="text-justify">Licencia Limitada. Usted puede acceder y ver el contenido del Sitio Web desde su computadora o desde cualquier otro dispositivo, y declara que conoce los derechos de la licencia de la plataforma.
                        <li class="text-justify">Marcas & Logos. Las marcas y logos expuestas en el Sitio Web son protegidas por registro de marca y no pueden ser usadas con respecto a productos y/o servicios que no estén relacionados, asociados o patrocinados por sus poseedores de derechos.</li>
                        <li class="text-justify">Información del Usuario. En el curso del uso que usted haga del Sitio Web y/o de los servicios puestos a su disposición en o a través del Sitio Web, se le puede pedir que nos proporcione cierta información. La plataforma publicará información de usuario útil e imprescindible para alcanzar los objetivos de interacción y promoción de la innovación entre usuarios.</li>
                        <li class="text-justify">Conducta Prohibida del Usuario. Usted garantiza y está de acuerdo en que, mientras use el Sitio Web y los diversos servicios y artículos que se ofrecen en o a través del Sitio Web, usted no: (a) personalizará a ninguna persona o entidad ni desvirtuará su afiliación con alguna otra persona o entidad; (b)  insertará su propio anuncio, posicionamiento de marca o algún otro contenido promocional o el de un tercero  en cualquiera de los contenidos, materiales o servicios o materiales del Sitio Web (por ejemplo, sin limitación, en una actualización RSS o en un programa de radio grabado (podcast) recibido o de algún otro modo a través del Sitio Web), ni usará, redistribuirá, republicará o explotará dichos contenidos o servicios con cualquier otro propósito adicional comercial o promocional; ni (c) intentará ganar acceso no autorizado a otros sistemas de cómputo a través del Sitio Web. Usted no: (i) participará en navegar por la red, en "raspar (scraping) la pantalla", "raspar (scraping) la base de datos", en recolectar direcciones de correo electrónico, direcciones inalámbricas u otra información personal o de contactos, o cualquier otro medio automático de obtener listas de usuarios u otra información de o a través del sitio Web o de los servicios ofrecidos en o a través del Sitio Web, incluyendo, sin limitación, cualquier información que se encuentre en algún servidor o base de datos relacionada con el Sitio Web o los servicios ofrecidos en o a través del Sitio Web; (ii) obtendrá o intentará obtener acceso no autorizado a los sistemas de cómputo, materiales o información por cualquier medio; (iii) usará el Sitio Web o los servicios puestos a su disposición en o a través del Sitio Web de alguna manera con la intención de interrumpir, dañar, deshabilitar, sobrecargar o deteriorar el Sitio Web o dichos servicios, incluyendo, sin limitación, mandar mensajes masivos no solicitados o "inundar" servidores con solicitudes; (iv) usará el Sitio Web o los servicios o artículos del Sitio Web en violación de la propiedad intelectual o de otros derechos legales o patrimoniales de <a href="www.thinkialab.com">www.thinkialab.com</a> o de algún tercero; ni (v) usará el Sitio Web o los servicios del Sitio Web en violación de cualquier ley aplicable. Usted se obliga, además, a no intentar (o alentar o apoyar el intento de otro) a embaucar, destruir, decodificar, o de otro modo alterar o interferir con el Sitio Web o con los servicios del Sitio Web, o con cualquier contenido del mismo, o hacer cualquier uso no autorizado del mismo. Usted se obliga a no usar el Sitio Web de alguna manera que pudiera dañar, deshabilitar, sobrecargar o deteriorar el Sitio Web o interferir con que cualquier otra persona pueda usar o disfrutar del Sitio Web o de cualquiera de sus servicios. Usted no obtendrá ni intentará obtener algún material o información a través de cualquier medio que no haya sido estipulado o puesto a la disposición del público intencionalmente a través del Sitio Web.</li>
                        <li class="text-justify">Derecho de Monitoreo y Control Editorial. <a href="www.thinkialab.com">www.thinkialab.com</a> y sus promotores, se reservan el derecho, pero no tienen la obligación, de monitorear y/o revisar todos los materiales e información enviados al Sitio Web o a través de los servicios o artículos del Sitio Web por los usuarios, y no es responsable de dichos materiales enviados por los usuarios. Sin embargo, se reserva el derecho en todo momento de divulgar cualquier información que sea necesaria para satisfacer cualquier ley, reglamento o solicitud gubernamental, o de editar, rehusarse a colocar o a quitar cualquier información o materiales, todos o en parte, que a discreción únicamente de <a href="www.thinkialab.com">www.thinkialab.com</a> sean censurables o en violación de estos Términos de Uso.</li>
                        <li class="text-justify">Enlaces con el Sitio Web. Usted está de acuerdo en que si incluye un enlace (link) de cualquier otro sitio web al Sitio Web, dicho enlace se abrirá en una nueva ventana navegadora y se enlazará con la versión completa de una página formateada HTML de este Sitio Web. Usted no tiene permitido enlazarse directamente a ninguna imagen almacenada en el Sitio Web o en nuestros servicios, como sería usar un método de enlace "en-línea" para provocar que la imagen almacenada por nosotros fuera expuesta en otro sitio web. Usted se obliga a no descargar o usar imágenes almacenadas en este Sitio Web en otro sitio web, con cualquier propósito, incluyendo, sin limitación, publicar dichas imágenes en otro sitio web. Usted se obliga a no enlazarse de cualquier otro sitio web a este Sitio Web de tal manera que el Sitio Web, o cualquier página del Sitio Web, esté "enmarcado", rodeado u ofuscado por los contenidos, materiales o posicionamientos de marca de cualquier tercero. Nos reservamos todos nuestros derechos bajo la ley para insistir en que cualquier enlace al Sitio Web sea descontinuado y a revocar su derecho a enlazarse al Sitio Web de cualquier otro sitio web, en cualquier momento en el que le mandemos notificación por escrito.</li>
                        <li class="text-justify">Indemnización. Usted se obliga a defender, indemnizar y a sacar a <a href="www.thinkialab.com">www.thinkialab.com</a> y a los1 directores, funcionarios, empleados y demás personal técnico y administrativo que trabaja y gestiona la plataforma y sus afiliados en paz y a salvo de cualquier demanda, responsabilidad, costos y gastos, de cualquier naturaleza, incluyendo honorarios de abogados, en que incurriera como resultado del uso del Sitio Web, su colocación o transmisión de cualquier mensaje, contenido, información, software u otros materiales a través del Sitio Web, o su incumplimiento o violación de la ley o de estos Términos y Condiciones. <a href="www.thinkialab.com">www.thinkialab.com</a> se reserva el derecho, a su propio costo, de asumir la defensa y control exclusivos de cualquier asunto de otra manera sujeto a indemnización por parte suya, y en dicho caso, usted se obliga a cooperar con <a href="www.thinkialab.com">www.thinkialab.com</a> en la defensa de dicha demanda.</li>
                        <li class="text-justify">Leyes Aplicables. Nosotros controlamos y operamos el Sitio Web desde Ecuador. No representamos a los materiales en el Sitio Web como apropiados o disponibles para su uso en otros lugares. Las personas que escojan acceder al sitio Web desde otros lugares lo harán por su propia iniciativa y son responsables del cumplimiento de las leyes locales, si y al grado en que las leyes locales sean aplicables. Todas las partes sujetas a estos términos y condiciones renuncian a sus derechos respectivos a un juicio con jurado.</li>
                        <li class="text-justify">Término.  <a href="www.thinkialab.com">www.thinkialab.com</a> puede terminar, cambiar, suspender o descontinuar cualquier aspecto del Sitio Web o de los servicios del Sitio Web en cualquier momento. Puede restringir, suspender o terminar su acceso al Sitio Web y/o a sus servicios si creemos que usted está en incumplimiento de nuestros términos y condiciones o de la ley aplicable, o por cualquier otra razón sin notificación o responsabilidad. Mantiene una política que estipula la terminación, en circunstancias apropiadas, de los privilegios de uso del Sitio Web para usuarios que son violadores repetitivos de los derechos de propiedad intelectual.</li>
                        <li class="text-justify"> Cambios de Términos de Uso.  <a href="www.thinkialab.com">www.thinkialab.com</a> se reserva el derecho, a su sola discreción, de cambiar, modificar, añadir o quitar cualquier porción de los Términos y Condiciones, toda o en parte, en cualquier momento.
                    </ol>

                </div>
            </div>
        </div>
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
                                href="mailto:info@laboratoriodeinnovacion.org">info@laboratoriodeinnovacion.org</a></li>
                        <li><a class="nav-link-style nav-link-light" href="tel:+5932345867">+593 234 5867</a></li>
                    </ul>
                    <h3 class="h6 pb-2 text-light">Síguenos en:</h3>
                    <a class="social-btn sb-facebook sb-light sb-lg mr-2 mb-2" href="#"><i class="fe-facebook"></i></a>
                    <a class="social-btn sb-twitter sb-light sb-lg mr-2 mb-2" href="#"><i class="fe-twitter"></i></a>
                    <a class="social-btn sb-instagram sb-light sb-lg mr-2 mb-2" href="#"><i class="fe-instagram"></i></a>
                    <a class="social-btn sb-linkedin sb-light sb-lg mr-2 mb-2" href="#"><i class="fe-linkedin"></i></a>
                </div>
            </div>
        </div>
    </section>

@endsection
