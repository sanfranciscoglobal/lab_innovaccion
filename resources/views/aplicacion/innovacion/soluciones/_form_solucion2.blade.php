<form method="POST"  enctype='multipart/form-data' onsubmit="return validar()" class="needs-validation" novalidate>
    @csrf
    @method('PUT')
    <div class="panel-heading">
        <h3 class="panel-title">Identificación de la organización</h3>
    </div>
    <div class="panel-body">

       <div class="row">
           <div class="col-12">
                <div class="form-group">

                    <label class="control-label">* Tipo de innovación propuesta <span style="color: gray">(Selecciona una o varias opciones.)</span></label>
                    {{-- <div class= "m-0 p-0 w-100 form-group">
                        
                        <select style="width:100%;" id="tipo_propuesta" name="tipo_institucion[]"
                            class="form-control select2"
                            data-ajax--url="{{route('api.tipo-propuesta.select2')}}"
                            data-ajax--data-type="json"
                            data-ajax--cache="true"
                            data-allow-clear="true"
                            data-placeholder="Seleccione uno o varios tipos"
                            data-close-on-select="false"
                            required="required" multiple>
                            @if($solucion->tipopropuestas)
                                @foreach($solucion->tipopropuestas as $propuesta)
                                    <option value="{{$propuesta->tipoinnovacion_id}}"
                                            selected>{{$propuesta->tipoinnovacionid->nombre}}</option>
                                @endforeach
                            @endif
                        </select>
 
                        <div class="invalid-tooltip">Por favor seleccione uno o varios tipos.</div>
                        <div class="valid-tooltip">Bien!</div>
                    </div> --}}
                    @php
                        $tipospropuestas=App\Models\TipoPropuesta::all();
                    @endphp
                    <div class="tipo-checkbox">
                        @foreach ($tipospropuestas as $tipopropuesta)
                       
                            <div class="custom-control custom-radio mb-3 w-form" >
                                <input class="custom-control-input form-control" onclick="validarpropuesta('tipo_institucion[]','#errortipo','#validotipo')" type="checkbox" data-name="checkbox" id="{{$tipopropuesta->id}}" name="tipo_institucion[]" value="{{$tipopropuesta->id}}">
                                <label class="custom-control-label text-muted" for="{{$tipopropuesta->id}}">{{$tipopropuesta->nombre}}</label>
                            </div>
                        
                        @endforeach
                        
                        <div class="invalid-tooltip" id='errortipo'>Por favor seleccione uno o varios tipos.</div>
                        <div class="valid-tooltip" id='validotipo'>Bien!</div>
                    </div>
                    

                    
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">


                    <label class="control-label">* Nivel actual de desarrollo de la solución <span style="color: gray">(Selecciona una opción.)</span></label>
                    {{-- <div class= "m-0 p-0 w-100 form-group">
                        
                        <select style="width:100%;" id="tipo_poblacion2" name="nivelsolucion_id"
                            class="form-control select2"
                            data-ajax--url="{{route('api.nivel-solucion.select2')}}"
                            data-ajax--data-type="json"
                            data-ajax--cache="true"
                            data-placeholder="Seleccione un nivel"
                            required="required">
                            @if($solucion->nivelsolucion_id)
                                <option value="{{$solucion->nivelsolucion_id}}"
                                    selected>{{$solucion->nivelsolucionid->nombre}}</option>
                                
                            @endif
                        </select>
 
                        <div class="invalid-tooltip">Por favor seleccione un nivel.</div>
                        <div class="valid-tooltip">Bien!</div>
                    </div> --}}
                    @php
                        $niveles=App\Models\NivelSolucion::all();
                    @endphp
                    <div class="tipo-checkbox">
                        @foreach ($niveles as $nivel)
                       
                            <div class="custom-control custom-radio mb-3 w-form" >
                                <input class="custom-control-input form-control" onclick="validarpropuesta('nivelsolucion_id','#errornivel','#validonivel')" type="radio" id="nivel{{$nivel->id}}" name="nivelsolucion_id" value="{{$nivel->id}}">
                                <label class="custom-control-label text-muted" for="nivel{{$nivel->id}}">{{$nivel->nombre}}</label>
                            </div>
                        
                        @endforeach
                        
                        <div class="invalid-tooltip" id='errornivel'>Por favor seleccione un nivel.</div>
                        <div class="valid-tooltip" id='validonivel'>Bien!</div>
                    </div>

                    
                    
    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="control-label">* Escribe tres palabras o conceptos clave que se refieran a la solución</label><br>
                    <label class="control-label">Campo 1</label>
                    <input maxlength="200" type="text" required="required" class="form-control"
                           placeholder="Ejemplo:Desarrollo de una plataforma web" name="concepto1"
                            value="{{$solucion->concepto1}}">
                    <label class="control-label">Campo 2</label>
                    <input maxlength="200" type="text" required="required" class="form-control"
                           placeholder="Ejemplo:Reingeniería de proceso" name="concepto2"
                           value="{{$solucion->concepto2}}">
                    <label class="control-label">Campo 3</label>
                    <input maxlength="200" type="text" required="required" class="form-control"
                           placeholder="Ejemplo:Turnero web" name="concepto3"
                           value="{{$solucion->concepto3}}">
                </div>
            </div>
            
        </div>
        
        <button class="btn btn-primary pull-right" type="submit" {{$solucion->id == null ? 'disabled' : ''}} formaction="{{ $url1.'?continue=1' }}">Guardar y continuar</button>
        <button class="btn btn-link" type="submit" {{$solucion->id == null ? 'disabled' : ''}}  formaction="{{ $url1.'?continue=0' }}">Guardar</button>
    </div>
</form>
<script>
    @if($solucion->tipopropuestas)
        @foreach($solucion->tipopropuestas as $propuesta)
            $checkname='{{$propuesta->tipoinnovacion_id}}';
            document.getElementById($checkname).checked=true;
        @endforeach
    @endif
    @if($solucion->nivelsolucion_id)
        
        $checkname='nivel{{$solucion->nivelsolucion_id}}';
        document.getElementById($checkname).checked=true;
    @endif
</script>
<script>
    let entrysubmit=false;
    function validar(){
        var x = document.getElementsByName("tipo_institucion[]");
        var y = document.getElementsByName("nivelsolucion_id");
        var i;
        var cont=0;
        entrysubmit=true;
        for (i = 0; i < x.length; i++) {
            if (x[i].checked) {
                cont+=1;
            }
        }
        var j;
        var cont2=0;
        for (j = 0; j < y.length; j++) {
            if (y[j].checked) {
                cont2+=1;
            }
        }
        if (cont>0 && cont2>0){
            
            $('#errortipo').removeClass('d-inline');
            $('#errornivel').removeClass('d-inline');
            $('#validotipo').addClass('d-inline');
            $('#validonivel').addClass('d-inline');
            return(true);
            
        }
        else if(cont>0){
         
            $('#validotipo').addClass('d-inline');
            $('#validonivel').removeClass('d-inline');
            $('#errornivel').addClass('d-inline');
            $('#errortipo').removeClass('d-inline');
            return(false);
        }
        else if(cont2>0){
            
            $('#validonivel').addClass('d-inline');
            $('#validotipo').removeClass('d-inline');
            $('#errornivel').removeClass('d-inline');
            $('#errortipo').addClass('d-inline');
            return(false);
        }
        else{
            $('#errortipo').addClass('d-inline');
            $('#errornivel').addClass('d-inline');
            
            return(false);
        }


        

        
    }
    function validarpropuesta(nombre,error,valido){
        var x = document.getElementsByName(nombre);
        var i;
        var cont=0;
        for (i = 0; i < x.length; i++) {
            if (x[i].checked) {
                cont+=1;
            }
        }
        if (entrysubmit){
        if (cont>0){
            $(error).removeClass('d-inline');
            $(valido).addClass('d-inline');
        }
        else{
            $(valido).removeClass('d-inline');
            $(error).addClass('d-inline');
        }
        }
        
    }

    

</script>