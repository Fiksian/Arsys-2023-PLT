@section('content')
<div class="card">
    <div class="card-body bg-primary text-dark">
        Event
    </div>
</div>

<form action="{{ route('search') }}" method="GET" class="form-inline">
    <div class="form-group">
        <input type="text" name="keyword" class="form-control" placeholder="Search" value="{{ $keyword ?? '' }}">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Search</button>
</form>

@if(isset($products))
    @if($products->count() > 0)
        <h2>Search Results for "{{ $keyword }}"</h2>
        <ul>
            @foreach($products as $product)
                <li>{{ $product->name }}</li>
            @endforeach
        </ul>
    @else
        <p>No search results found for "{{ $keyword }}"</p>
    @endif
@endif
<hr>

<div class="card">
    <div class="row">
        <div class="col-sm-2">
            <div class="card-body bg-primary text-dark">
                Event Name
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <div class="card-body bg-primary text-dark">
                Event Date
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <div class="card-body bg-primary text-dark">
                Application Deadline
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <div class="card-body bg-primary text-dark">
                Draft Deadline
            </div>    
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <div class="card-body bg-primary text-dark">
                Seats
            </div>
        </div>
    </div>
</div>

@endsection