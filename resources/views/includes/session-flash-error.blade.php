@if (session('error'))
    {{-- ALERT --}}
    {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fe-check-circle font-size-xl mt-n1 mr-3"></i>
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> --}}

    {{-- MODAL --}}
    <div class="modal modal-status" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title text-white"><i class="fe-slash mr-2"></i> Acción NO Completa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-danger">
                    <p>{{ session('error') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
                    {{-- <button type="button" class="btn btn-primary btn-sm">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- TOAST --}}
    {{-- <div class="toast show mx-auto my-auto" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success text-white">
            <i class="fe-check-circle mr-2"></i>
            <span class="mr-auto">Acción Completa</span>
            <button type="button" class="close text-white ml-2 mb-1" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body text-success">{{ session('status') }}</div>
    </div> --}}
@endif
