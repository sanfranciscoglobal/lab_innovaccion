<form method="POST" enctype='multipart/form-data' class="needs-validation" novalidate>
@csrf
@method($method)
<input type="hidden" name="step" value="1">
<input type="hidden" name="tipo_convocatoria_id" value="{{ $tipo }}">
<input type="hidden" name="convocatoria_id" value="{{ $convocatoria->id }}">
<p>En esta sección promovemos la gestión de la innovación sobre la base de la participación ciudadana y la creación
    colectiva de soluciones a partir de la identificación y planteamiento de problemas.</p>
<p>Impulsamos la innovación abierta, la innovación social y la innovación pública, mediante un esquema de interacción
    virtual que inicia con la visibilización y registro de problemas, para que estos puedan recibir propuestas de
    soluciones que cumplan con características innovadoras.</p>
<p>Se realizarán convocatorias a distintos sectores para que registre problemas que hayan detectado en su gestión, y a
    partir de esa información iniciará el intercambio de conocimiento para proponer soluciones sobre el pilar de la
    innovación.</p>
<p>Toda la información se irá cargando en esta sección, y de forma georeferenciada en el mapa de la plataforma.</p>
<div class="panel-heading">
    <h3 class="panel-title">Identificación del Problema</h3>
    <p>
        <?php
            switch ($tipo) {
                case 1:
                    echo 'En esta sección buscamos levantar información referente a problemas existentes en los distintos sectores
                    productivos del Ecuador, para promover la cooperación con otros actores del Sistema Nacional de Innovación en
                    busca de articulación de ideas, proyectos y conocimientos externos con el interno de cada organización/empresa,
                    para proponer soluciones basadas en la innovación.';
                    break;
                case 2:
                    echo 'En esta sección buscamos levantar información acerca de problemas y soluciones en productos, servicios,
                    procesos, organizaciones, comunicación, que solucionen cuestiones en el ámbito social o de forma más eficaz y
                    eficiente en comparación con alternativas actuales.';
                    break;
                case 3:
                    echo 'En esta sección buscamos levantar información acerca de problemas y soluciones en los espacios ciudadanos
                    de participación, colaboración y co-creación, para aportar a la gestión pública a impulsar la innovación a
                    partir de los requerimientos ciudadanos, promoviendo la participación ciudadana, la apertura de información, el
                    uso de tecnologías de la comunicación y de la información en la generación de espacios alternativos de
                    interacción enfocados a mejorar el servicio público, crear soluciones innovadoras a situaciones sociales,
                    modernizar la relación entre actores gubernamentales y no gubernamentales, e innovar en el ámbito de las
                    políticas públicas';
                    break;
            }
        ?>
    </p>
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-12">
            @include('aplicacion.innovacion.gestion.identificacion.tipo-'.$tipo.'.inputs-problema')
        </div>
    </div>

    <button class="btn btn-primary pull-right" type="submit" id="submit" formaction="{{ $url.'?continue=1' }}">Guargar y continuar</button>
    <button class="btn btn-link" type="submit" formaction="{{ $url.'?continue=0' }}">Guardar</button>
</div>
</form>
