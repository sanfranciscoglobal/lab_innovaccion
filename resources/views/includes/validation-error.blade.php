@if ($errors->any())
    @foreach ($errors->all() as $error)
    {{-- <div class="card mb-4 py-3 border-left-danger">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div> --}}
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fe-x-circle font-size-xl mt-n1 mr-3"></i>
        {{ $error }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endforeach
@endif
