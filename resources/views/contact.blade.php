@extends('./layout/layout')

@section('nav_category')
    <ul class="dropdown-menu">
        @foreach($category as $c)
            <li><a class="dropdown-item" href="{{ route('category', $c["id"]) }}">{{ $c['category'] }}</a></li>
        @endforeach 
    </ul>
@endsection

@section('content')
    <h1 class="py-4">Contact</h1>
    <div class="row">
        <div class="row">
            <h2>Store Address</h2>
            <h4>Jalan Pembangunan</h4>
            <h4>Komplek Pertokoan Emerald III</h4>
            <h4>Bintaro, Tangerang</h4>
            <h4>Indonesia</h4>
        </div>
        <div class="row">
            <h2>Open Daily</h2>
            <h4>06:00 - 21:00</h4>
        </div>
        <div class="row">
            <h2>Contact</h2>
            <h4><b>Phone</b> : 092138129312</h4>
            <h4><b>Email</b> : happybookstore@gmail.com</h4>

        </div>
    </div>
@endsection