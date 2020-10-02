@if ($errors->any())
    <div class="card mb-4 py-3 border-left-danger">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
