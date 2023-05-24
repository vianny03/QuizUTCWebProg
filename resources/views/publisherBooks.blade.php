@extends('./layout/layout')

@section('nav_category')
    <ul class="dropdown-menu">
        @foreach($category as $c)
            <li><a class="dropdown-item" href="{{ route('category', $c["id"]) }}">{{ $c['category'] }}</a></li>
        @endforeach 
    </ul>
@endsection

@section('content')
    <div class="py-4">
        <h3>{{ $publisherInfo["name"] }}</h3>
        <h3>{{ $publisherInfo["address"] }}</h3>
        <h3>{{ $publisherInfo["phone"] }}</h3>
        <h3>{{ $publisherInfo["email"] }}</h3>
    </div>
    <div class="d-flex flex-wrap" style="gap: 10px">
        @foreach($book as $b)
        <div class="card" style="width:250px">
            <img class="card-img-top" src="{{ $b["image"] }}" style="height: 373px">
            <div class="card-body">
                <h5 style="min-height: 43px">{{ $b["title"] }}</h5>
                <h6>by</h6>
                <h6>{{ $b["author"] }}</h6>
                <a href="{{ route('detail', $b["book_id"]) }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection