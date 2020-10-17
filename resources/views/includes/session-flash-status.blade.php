@if (session('status'))
    {{-- <div class="col-12 p-0">
        <div class="card mb-2 py-0 border-left-success">
            <div class="card-body py-2">
                {{ session('status') }}
            </div>
        </div>
    </div> --}}
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fe-check-circle font-size-xl mt-n1 mr-3"></i>
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

{{-- @if (session('error'))
    {{-- <div class="col-12 p-0">
        <div class="card mb-2 py-0 border-left-danger">
            <div class="card-body py-2">
                {{ session('error') }}
            </div>
        </div>
    </div> --}
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fe-x-circle font-size-xl mt-n1 mr-3"></i>
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif --}}
