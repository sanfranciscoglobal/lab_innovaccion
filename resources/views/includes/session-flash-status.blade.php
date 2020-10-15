@if (session('status'))
    <div class="alert alert-success" role="alert">
        <i class="fe-check-circle font-size-xl mt-n1 mr-3"></i>
        {{ session('status') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger" role="alert">
        <i class="fe-x-circle font-size-xl mt-n1 mr-3"></i>
        {{ session('error') }}
    </div>
@endif