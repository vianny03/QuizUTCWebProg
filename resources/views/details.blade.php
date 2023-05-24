@extends('./layout/layout')

@section('nav_category')
    <ul class="dropdown-menu">
        @foreach($category as $c)
            <li><a class="dropdown-item" href="{{ route('category', $c["id"]) }}">{{ $c['category'] }}</a></li>
        @endforeach 
    </ul>
@endsection

@section('content')
    <div class="row py-4">
        <div class="col-lg-4">
            <img src="{{ $book["image"] }}" style="width: 100%">
        </div>
        <div class="col-lg-8">
            <h1>{{ $book["title"] }}</h1>
            <h3>{{ 'Author : ' . $book["author"] }}</h4>
            <h3>{{ 'Publisher : ' . $book["name"] }}
            <h4>Synopsis</h4>
            <h5>{{ $book["synopsis"] }}</h6>
        </div>
    </div>
@endsection