
<div class="col-lg-9">
    <div class="d-flex flex-column h-100 bg-light rounded-lg box-shadow-lg p-4">
        <div class="py-2 p-md-3">
            <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">
                <h1 class="h3 mb-2 text-nowrap">Problemas Reportados <span class="badge badge-secondary ml-1">18</span></h1>
            </div>
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                <div class="col-sm-12 pt-4 pb-2 list-item">
                    <div class="row">
                        <div class="col-sm-9">
                            <h4 class="h4">Titulo del problema {{ $i + 1 }}</h4>
                        </div>
                        <div class="col-sm-3 text-right text-muted">{{ strftime("%B %d, %Y") }}</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quas placeat nam minus laborum, corporis mollitia cumque, voluptas dignissimos suscipit labore quam nobis numquam rem, ipsum amet possimus dolor vel?</p>
                </div>
                @endfor
            </div>
            <div class="row mt-4">
                <div class="col-sm-8">
                    <span class="text-muted">Se muestran 4 de 18 problemas</span>
                </div>
                <div class="col-sm-4 text-right">
                    <button type="button" class="btn btn-primary">Cargar más problemas</button>
                </div>
            </div>
        </div>
    </div>
</div>
