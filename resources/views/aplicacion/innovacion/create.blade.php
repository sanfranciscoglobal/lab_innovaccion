@extends('layouts.aplicacion.app')

@section('content')
    <form role="form" action="{{$url}}" onsubmit="return validar();" id='myForm' method="POST" enctype="multipart/form-data">
        @csrf
        @method($method)
    <div class="position-relative bg-purple-gradient" style="height: 480px;">
        <div class="cs-shape cs-shape-bottom cs-shape-slant bg-secondary  d-lg-block">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 260">
                <polygon fill="currentColor" points="0,257 0,260 3000,260 3000,0"></polygon>
            </svg>
        </div>
    </div>
    <div class="container bg-overlay-content pb-4 mb-md-3" style="margin-top: -350px;">
        <div class="row">
            <!-- Content-->
            <div class="col-lg-8 offset-lg-2">
                <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
                    <div class="py-2 p-md-3">
                        <!-- Title + Delete link-->
                        <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">
                            <h1 class="h3 mb-2 text-nowrap">Registro de Innovación</h1>
                            @if ($method=='PUT')
                                <a class="btn btn-link text-danger font-weight-medium btn-sm mb-2" data-toggle="modal" data-target="#deleteAlert"><i class="fe-trash-2 font-size-base mr-2"></i>Eliminar convocatoria </a>
                            @endif
                            
                        </div>
                        <!-- Content-->
                        <div class="row">
                            <div class="col-12">
                                <h2 class="h4 mb-2 text-nowrap">Tipo de Convocatoria</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="tipo_abierta">
                                    <input class="innovacion_tipo" type="radio" id="tipo_abierta" value="1" name="tipoconvocatoria_id" required>
                                    Innovación Abierta
                                </label>
                            </div>
                            <div class="col-sm-3">
                                <label for="tipo_social">
                                    <input class="innovacion_tipo" type="radio" id="tipo_social" value="2" name="tipoconvocatoria_id">
                                    Innovación Social
                                </label>
                            </div>
                            <div class="col-sm-3">
                                <label for="tipo_publica">
                                    <input class="innovacion_tipo" type="radio" id="tipo_publica" value="3" name="tipoconvocatoria_id">
                                    Innovación Pública
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-4 mt-4">
                                <hr />
                            </div>
                        </div>
                        <div id="control-1" class="row controls d-none">
                            @include('aplicacion.innovacion._form_abierta')
                        </div>
                        <div id="control-2" class="row controls d-none">
                            @include('aplicacion.innovacion._form_social')
                        </div>
                        <div id="control-3" class="row controls d-none">
                            @include('aplicacion.innovacion._form_publica')
                        </div>
                        <div class="row send-button d-none">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="innovacion_fecha_inicio">* Fecha de inicio</label>
                                            <input class="form-control" type="date" id="innovacion_fecha_inicio" min="<?php echo date('d/m/Y'); ?>"  value="{{isset($convocatoria->fecha_inicio)?$convocatoria->fecha_inicio:old('fecha_inicio')}}" name="fecha_inicio" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="innovacion_fecha_cierre">* Fecha de fin</label>
                                            <input class="form-control" type="date" id="innovacion_fecha_cierre" min="<?php echo date('d/m/Y'); ?>" value="{{isset($convocatoria->fecha_cierre)?$convocatoria->fecha_cierre:old('fecha_cierre')}}" name="fecha_cierre" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">* Descripción de la Convocatoria <span style="color: gray">(max. 100 palabras) (min. 50 palabras)</span></label>
                                    <textarea onkeyup="countWords();" onkeydown="countWords();" onblur="validar();" class="form-control" name="descripcion" id="descripcion_convocatoria"
                                              rows="10" required="required"
                                              >{{ old('descripcion', $convocatoria->descripcion ?? null) }}</textarea><span style="color: gray" id="count-words"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="innovacion_imagen">* Imagen</label>
                                    @if ($method=='PUT')
                                        <input type="file" class="dropify" name="imagen" id="innovacion_imagen " accept="image/gif, image/jpeg, image/png"  data-default-file="{{asset('storage/convocatorias').'/'.$convocatoria->imagen}}">
                                                                                                    
                                    @else
                                        <input type="file" class="dropify" name="imagen" id="innovacion_imagen " accept="image/gif, image/jpeg, image/png" required>
                                    @endif
                                                                       
                                    
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="mt-2 mb-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    
                                    <div class="custom-control custom-checkbox d-block">
                                        <input class="custom-control-input" type="checkbox" id="verificada" name="terminos" value='1' required>
                                        <label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>
                                    </div>
                                    @if ($method=='PUT')
                                        <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i class="fe-save font-size-lg mr-2"></i> Actualizar</button>
                                    @else
                                        <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i class="fe-save font-size-lg mr-2"></i> Publicar</button>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </form>
    @if ($method=='PUT')
        
        <div class="modal fade" id="deleteAlert" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h4 class="modal-title text-white"><i class="fe-alert-triangle mr-2"></i> Eliminar Convocatoria</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times;</span>
                            </button>
                    </div>

                    <form action="{{ route('app.convocatoria.delete', $convocatoria->id) }}" role="form" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body">
                            <div class="text-warning">Está seguro que desea eliminar esta convocatoria?</div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary btn-sm">Eliminar</button>
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    @endif
@endsection
@section('footer')
<script>
    $(document).ready(function(){
        var cont=0;
        countWords();
        $('.innovacion_tipo').change(function(){
            if($(this).is(':checked')){
                if ($(this).val() > 0){
                    
                    $('.send-button').removeClass('d-none');
                    $('.controls').addClass('d-none');
                    $('#control-'+ $(this).val()).removeClass('d-none');
                    $('.controls .form-control').removeAttr('required');
                    $('#control-'+ $(this).val()+' .form-control').attr('required', true);
                    if (cont==0){
                        cargarput($(this).val());
                        cont+=1;
                        
                        
                    }
                }
            }
        });

    });

    $(function(){
        let tipo = {{ old('tipoconvocatoria_id', (int)$convocatoria->tipoconvocatoria_id) ?? 'null' }};
       switch(tipo){
           case 1:
               $('#tipo_abierta').trigger('click');
               break;
           case 2:
               $('#tipo_social').trigger('click');
               break;
           case 3:
               $('#tipo_publica').trigger('click');
               break;
           default:
            
               break;
       }

   });
   //contar palabras
   var maxlength=300;
    var maxword=100;

   function countWords(){
        
        let str = document.getElementById("descripcion_convocatoria").value;
        var spaces=str.match(/\S+/g);
        var words=spaces ? spaces.length:0;
        if (words>maxword){
            if (words==maxword+1){
                maxlength=$('#descripcion_convocatoria').value.length-2
            }
            $('#descripcion_convocatoria').value=$('#descripcion_convocatoria').value.substring(0,maxlength);
            words=maxword;
            alert('Ha rebasado el limite');
        }
        document.getElementById("count-words").innerHTML=words+" palabras";
    };

    function validar(){
        
        let str = document.getElementById("descripcion_convocatoria").value;
        var spaces=str.match(/\S+/g);
        var words=spaces ? spaces.length:0;
        if (words>50 || words==0){
            
            return(true);
        }
        else{
            document.getElementById("descripcion_convocatoria").focus();
            alert('Minimo de palabras requerido');
            return(false);
        }
    };
    ///
</script>
<script type="text/javascript">

    function cargarput(valortipo){

        var listasubsectores=[];
        var arraylista=[];
        if (valortipo==1){
           // alert('INNOVACION ABIERTA');
           
            idsubsector='#innovacion_abierta_subsector_productivo';
            listasectores=$('#innovacion_abierta_sector_productivo').val();
            arraylista= <?php echo $convocatoria->consubsectores?>;           
            arraylista.forEach(subsector => {
                listasubsectores.push(subsector['subsector_id']);
            });
            primeracarga(listasectores,idsubsector,listasubsectores);

        }
        else if(valortipo==3){
            
           // alert('INNOVACION PUBLICA');
            idsubsector='#innovacion_publica_subsector_productivo';
            listasectores=$('#innovacion_publica_sector_productivo').val();
            arraylista= <?php echo $convocatoria->consubsectores?>;           
            arraylista.forEach(subsector => {
                listasubsectores.push(subsector['subsector_id']);
            });
            primeracarga(listasectores,idsubsector,listasubsectores);
        }
        
    };

    $(document).ready(function(){
        var listasectores=[];
        var idsubsector;
        $('#innovacion_abierta_sector_productivo').change(function(){
            idsubsector='#innovacion_abierta_subsector_productivo';
            listasectores=$('#innovacion_abierta_sector_productivo').val();
           
            recargarlista(listasectores,idsubsector);
        });
        $('#innovacion_publica_sector_productivo').change(function(){
            idsubsector='#innovacion_publica_subsector_productivo';
            listasectores=$('#innovacion_publica_sector_productivo').val();
        
            recargarlista(listasectores,idsubsector);
        });
    });

</script>
<script type="text/javascript">
    
    function recargarlista(listasectores,idsubsector){
        
        if (listasectores.length!=0){
            var subsectorlist=$(idsubsector).val();
            $.ajax({

                type:"POST",
                url:"{{route('api.tipo-subsector.select2')}}",
                data: { listasectores1: JSON.stringify(listasectores)} ,
                
                success:function(r){
                    $(idsubsector).find('option').remove();
                    $(r).each(function(i,v){
                        if (subsectorlist.includes(v.id.toString())){
                            $(idsubsector).append('<option selected value="'+ v.id+'">'+v.text+'</option>');
                        }
                        else{
                            $(idsubsector).append('<option value="'+ v.id+'">'+v.text+'</option>');
                        }
                        
                    });
                },
                error:function(){
                    alert('Ocurrio un error en el servidor ..');
                }

            });
        }
        else{
            $(idsubsector).find('option').remove();
        }     
    };

    function primeracarga(listasectores,idsubsector,listasubsectores){
        if (listasectores.length!=0){
            
            $.ajax({

                type:"POST",
                url:"{{route('api.tipo-subsector.select2')}}",
                data: { listasectores1: JSON.stringify(listasectores)} ,
                
                success:function(r){
                    $(idsubsector).find('option').remove();
                    $(r).each(function(i,v){
                        if (listasubsectores.includes(v.id)){
                            $(idsubsector).append('<option selected value="'+ v.id+'">'+v.text+'</option>');
                        }
                        else{
                            $(idsubsector).append('<option value="'+ v.id+'">'+v.text+'</option>');
                        }
                        
                    });
                },
                error:function(){
                    alert('Ocurrio un error en el servidor ..');
                }

            });
        }
        else{
            $(idsubsector).find('option').remove();
        }

        };
</script>

@endsection
