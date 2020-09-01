@if (session('status'))
    <div class="col-12 p-0">
        <div class="card mb-2 py-0 border-left-success">
            <div class="card-body py-2">
                {{ session('status') }}
            </div>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="col-12 p-0">
        <div class="card mb-2 py-0 border-left-danger">
            <div class="card-body py-2">
                {{ session('error') }}
            </div>
        </div>
    </div>
@endif