@extends('./layout/layout')

@section('nav_category')
    <ul class="dropdown-menu">
        @foreach($category as $c)
            <li><a class="dropdown-item" href="{{ route('category', $c["id"]) }}">{{ $c['category'] }}</a></li>
        @endforeach 
    </ul>
@endsection

@section('content')
    <h2 class="py-4">Publishers</h2>
    <div class="d-flex flex-wrap" style="gap: 10px">
        @foreach($publisher as $p)
        <div class="card" style="width:250px">
            <img class="card-img-top" src="{{ $p["logo"] }}" style="height: 373px">
            <div class="card-body">
                <h5 style="min-height: 43px">{{ $p["name"] }}</h5>
                <h6>{{ $p["address"] }}</h6>
                <a href="{{ route('publisherBooks', $p["id"]) }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection