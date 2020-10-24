<div class="form-group">
    <div class="controls-container mb-3">
        <label class="control-label">* El problema detectado no es confidencial, por lo tanto, puede ser tratado de forma abierta con actores externos a ti, tu equipo u organización</label>
        <div class="row">
            <div class="col-sm-6 col-lg-1">
                <div class="custom-control custom-radio">
                    <input class="custom-control-input conditional" data-target="confidencial" type="radio" id="confidencial-1" name="confidencial" value="1" required>
                    <label class="custom-control-label" for="confidencial-1">Si</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-1">
                <div class="custom-control custom-radio">
                    <input class="custom-control-input conditional" data-target="confidencial" type="radio" id="confidencial-2" name="confidencial" value="2" >
                    <label class="custom-control-label" for="confidencial-2">No</label>
                </div>
            </div>
        </div>
        <div class="message-for-no d-none">
            <p>Esta convocatoria busca generar porcesos de innovación social que requieren la interacción de diversos actores del sistema nacional de innovación.</p>
        </div>
    </div>
    <div class="controls-container mb-3 has-parent confidencial d-none">
        <label class="control-label">* Tú, tu equipo u organización tienen disponibilidad para interactuar con otros actores para entregar datos e información para resolver el problema detectado</label>
        <div class="row">
            <div class="col-sm-6 col-lg-1">
                <div class="custom-control custom-radio">
                    <input class="custom-control-input conditional" data-target="entregadatos" type="radio" id="entregadatos-1" name="datos" value="1">
                    <label class="custom-control-label" for="entregadatos-1">Si</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-1">
                <div class="custom-control custom-radio">
                    <input class="custom-control-input conditional" data-target="entregadatos" type="radio" id="entregadatos-2" name="datos" value="2">
                    <label class="custom-control-label" for="entregadatos-2">No</label>
                </div>
            </div>
        </div>
        <div class="message-for-no d-none">
            <p>Esta convocatoria busca generar porcesos de innovación social que requieren la interacción de diversos actores del sistema nacional de innovación.</p>
        </div>
    </div>
    <div class="controls-container mb-3 has-parent entregadatos d-none">
        <label class="control-label">* Describe el sector/grupo social al cual afecta el problema (280 caractéres)</label>
        <textarea class="form-control" id="textarea-input" rows="3" name="grupo_social" placeholder="Ejemplo. Comunidad de mujeres productoras de artesanías."></textarea>
    </div>
    <div class="controls-container mb-3">
        <label class="control-label">* Describe cuál es el problema detectado (500 caractéres)</label>
        <textarea class="form-control" id="textarea-input" rows="5" name="problema" required placeholder="Ejemplo. HE DETECTADO QUE SE PRODUCE EL PROBLEMA DE dificultad en el acabado de las artesanías por falta de equipos, LO CUAL PROVOCA reducción en las ventas."></textarea>
    </div>
    <div class="controls-container mb-3">
        <label for="pdf">* Carga un archivo complementario (Max. 10Mb)</label>
        <input type="file" class="dropify" name="archivo" id="pdf" required>
    </div>
</div>
