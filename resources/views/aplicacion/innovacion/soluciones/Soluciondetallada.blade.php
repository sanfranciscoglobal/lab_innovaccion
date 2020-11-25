@extends('layouts.aplicacion.app')
@php
  $month_mini = array("","ENE", "FEB", "MAR", "ABR", "MAY", "JUN", "JUL", "AGO", "SEP", "OCT", "NOV", "DIC");

@endphp
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
        .centrado{
            margin-top: 10%;
        }

    </style>
@endsection
@section('content')
  <section class="container my-lg-2 pt-5 pb-lg-5">
    <div class="row align-items-center">
        <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
            <h1 class="mt-5">{{$solucion->problemaid->problema}}</h1>
            
        </div>
        <div class="col py-3 py-lg-0 mt-lg-5"><img src="{{ asset('img/layout/home/laboratorio-side-bkg.png') }}" alt="Side banner"></div>
    </div>
  </section>

    <section class="container bg-secondary mb-5">
    
        @php
          $avg = $solucion->rating->avg('rating') >= 1 ? $solucion->rating->avg('rating') : 5; 
          $rating = (int)round($avg, 0);
          $comentarios = $solucion->comentarios->sortByDesc('created_at')->slice(0, 3);
        @endphp
          <div class="card ">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
            <div class="px-0 px-xl-2 pt-0" >
              <div class="mb-3">
                <h4 class="card-title">{{ $solucion->nombre }}</h4>
                <h6 class="card-subtitle">Registrado el {{ date('Y-m-d', strtotime($solucion->created_at))}}</h6>
                
              </div>
              <div class="mb-3">
                <h4 class="card-title">Sector al que perteneces</h4>
                <p class="card-text">{{ $solucion->sectorsolucionid->nombre }}</p>
              </div>
              <div class="mb-3">
                <h4 class="card-title">Tipo de innovación propuesta</h4>
                 
                  <ul class="text-muted">
                    @foreach ($solucion->tipopropuestas as $propuesta)
                      <li>{{$propuesta->tipoinnovacionid->nombre}}</li>
                    @endforeach
  
                  </ul>
              </div>
              @if ($solucion->estado_descrip || $solucion->problemaid->user->id== Auth::id() )
                <div class="mb-3">
                  <h4 class="card-title">Describe la Solución</h4>
                  <p class="card-text">{{ $solucion->descripcion }}</p>
                </div>
              @endif
              
              <div class="mb-3">
                <h4 class="card-title">Nivel actual de desarrollo de la Solución</h4>
                <p class="card-text">{{ $solucion->nivelsolucionid->nombre }}</p>
              </div>
              <div class="mb-3">
                <h4 class="card-title">Palabras o conceptos clave</h4>
                <ul class="text-muted">
                  
                  <li>{{$solucion->concepto1 }}</li>
                  <li>{{$solucion->concepto2 }}</li>
                  <li>{{ $solucion->concepto3 }}</li>
                </ul>
              </div>
              @if ($solucion->estado_descrip || $solucion->problemaid->user->id== Auth::id() )
                <div class="mt-3 text-primary font-weight-semibold">
                  <h4 class="card-title"><i class="fe-file font-size-xl mr-2"></i>Archivos</h4>         
                  <span class="card-text text-muted"><i class="czi-message text-muted mr-2"></i>{{$solucion->archivo}}
                  </span>
                  <a class="badge badge-lg" href="{{route('soluciones.download',$solucion->archivo)}}"><i class="fe-download text-muted mr-2"></i></a>
                </div> 
              @endif
            </div>

              {{-- COMENTARIOS + RATING --}}
              <div class="text-center">
              
              <div class="mt-5">
                {{-- <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="rating">
                     
                      <h4>Califica esta solución</h4>
                      <form action="{{ route('app.solucion.rating', $solucion->id)}}" method="POST" class="rating">
                        @csrf
                        
                        <select id="example" name="value" required class="border border-warning">
                          <option value="1" {{ $rating == 1 ? 'selected' : ""}}>1</option>
                          <option value="2" {{ $rating == 2 ? 'selected' : ""}}>2</option>
                          <option value="3" {{ $rating == 3 ? 'selected' : ""}}>3</option>
                          <option value="4" {{ $rating == 4 ? 'selected' : ""}}>4</option>
                          <option value="5" {{ $rating == 5 ? 'selected' : ""}}>5</option>
                        </select>
                      </form>
                    </div>
                    <div class="comentario mt-3">
                      <h4>Comenta esta solución</h4>
                      <form action="{{ route('app.solucion.comentario', $solucion->id) }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group">
                          <textarea class="form-control" name="comentario" rows="2" maxlength="200" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Comentar</button>
                      </form>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    @foreach($comentarios as $com)
                    <h6>{{ $com->user->name }}</h6>
                    <p>{{ $com->comentario }}</p>
                    @endforeach
                  </div>
                </div> --}}
                

                <ul class="d-flex justify-content-center list-inline">
                  <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-facebook sb-dark sb-sm mr-2 mr-md-3" href="{{ $solucion->facebook ?? '#' }}">
                      <i class="fe-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-twitter sb-dark sb-sm mr-2 mr-md-3" href="{{ $solucion->twitter ?? '#' }}">
                      <i class="fe-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-instagram sb-dark sb-sm mr-2 mr-md-3" href="{{ $solucion->instagram ?? '#' }}">
                      <i class="fe-instagram"></i>
                    </a>
                  </li>
                  <li class="list-inline-item m-0">
                    <a class="social-btn sb-outline sb-youtube sb-dark sb-sm" href="{{ $solucion->youtube ?? '#' }}">
                      <i class="fe-youtube"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            </div>
            @if ($solucion->problemaid->user->id== Auth::id() && $solucion->observacionesid==null )
                <div class="text-center font-size-sm text-muted">

                  <form action="{{route('app.soluciones.observacioncrear')}}" class="needs-validation" novalidate>
                      <input type="hidden" name="solucion_id" value="{{$solucion->id}}">
                      <div class="pb-2">
                          <div class="card h-100 border-0 box-shadow pt-4 pb-5 mx-1 text-left" style="padding: 2%; background:#f2f2f2">
                              <div class="row">
                                  <div class="col-12">
                                      <h3>Observaciones</h3>
                                      <div class="form-group">
                                        <label class="control-label ">* ¿Encuentras esta solución viable?</label>
                                        
                                        <div class="row">
                                          <div class="col-2">
                                              <div class="custom-control custom-radio">
                                                  <input class="custom-control-input form-control" type="radio" id='viable1.{{$solucion->id}}'  name="viable" value="1" checked required>
                                                  <label class="custom-control-label" for='viable1.{{$solucion->id}}'  >Si</label>
                                              </div>
                                          </div>
                                          <div class="col-2">
                                              <div class="custom-control custom-radio">
                                                  <input class="custom-control-input form-control"  type="radio" id='viable2.{{$solucion->id}}' name="viable" value="0">
                                                  <label class="custom-control-label" for='viable2.{{$solucion->id}}'>No</label>
                                              </div>
                                          </div>
                                          
                                        </div>
                                        
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label ">* ¿Cómo mejorar la propuesta? Escribe tus comentarios técnicos a la solución</label>
                                        <textarea id="comentario" class="form-control" name="comentario" placeholder="Escribe tus comentarios" required rows="6"
                                          ></textarea>
                                          <br>
                                          @error('comentario')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                                      </div>
                                      
                                  </div>
                              </div>
                            
                                <div class="custom-control custom-checkbox d-block">
                                    <input class="custom-control-input" type="checkbox" id="verificada" name="terminos" value="1" required>
                                    <label class="custom-control-label" for="verificada">* Declaro que conozco los términos y condiciones de esta plataforma y autorizo que se publiquen todos los datos registrados en este formulario.</label>
                                    
                                </div>
                                
                              <button class="btn btn-primary mt-3 mt-sm-0" id='submitbutton' type="submit"><i class="fe-send font-size-lg mr-2"></i>Enviar</button>
                    
                          </div>
                      </div>
                  </form>
      
                 
                </div>
              
            @elseif ($solucion->observacionesid!=null && $solucion->user_id== Auth::id() )
                <div class="pb-2">
                  <div class="card h-100 border-0 box-shadow pt-4 pb-5 mx-1 text-left" style="padding: 2%; background:#f2f2f2">
                      <div class="row">
                          <div class="col-12">
                              <h3>Observaciones</h3>
                              <div class="form-group">
                                <label class="control-label ">¿Encuentras esta solución viable?</label>                                
                                  <input  disabled class="form-control bx-label" style="cursor: auto; background:white" type="text" value="{{ old('viable', $solucion->observacionesid->viable) == '1' ? 'Si' : 'No' }}">
                                
                              </div>
                              <div class="form-group">
                                <label class="control-label ">¿Cómo mejorar la propuesta?</label>
                                <textarea disabled id="comentario" style="cursor: auto;" class="form-control" name="comentario" placeholder="Escribe tus comentarios" required rows="6"
                              >{{$solucion->observacionesid->comentario}}</textarea>
                                  <br>
                                  @error('comentario')<div class="invalid-feedback d-inline">{{ $message }}</div>@enderror
                              </div>
                              
                          </div>
                      </div>
                      <a class="btn btn-primary mt-3 mt-sm-0" href="#">Mejorar la Solución</a>
                  </div>
                  
              </div>
              
            @endif
          
      </div>
      <div class="row" style="margin-top:3%;padding-left:50%;">
        <a href="{{route('soluciones.ver',$solucion->problemaid->id)}}" class="btn btn-sm btn-primary">Cerrar</a>
    </div>
    </section>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js" integrity="sha512-nUuQ/Dau+I/iyRH0p9sp2CpKY9zrtMQvDUG7iiVY8IBMj8ZL45MnONMbgfpFAdIDb7zS5qEJ7S056oE7f+mCXw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/css-stars.min.css" integrity="sha512-Epht+5WVzDSqn0LwlaQm6dpiVhajT713iLdBEr3NLbKYsiVB2RiN9kLlrR0orcvaKSbRoZ/qYYsmN1vk/pKSBg==" crossorigin="anonymous" />
<script type="text/javascript">

   $(function() {
      $('#example').barrating({
        theme: 'css-stars',
        onSelect:function(value, text, event){
          // saveRating(value);
          $('.rating').submit();
        }
      });
   });
</script>
@endsection