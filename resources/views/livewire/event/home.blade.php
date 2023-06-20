@section('content')
<div class="card">
    <div class="card-body bg-primary text-dark">
        Event
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{ route('event.home') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search by Event ID" name="search">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div>
    @livewire('event.functions.idx')
</div>
<br>
@endsection