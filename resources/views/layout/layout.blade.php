<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@vite(['resources/js/app.js'])
<body style="min-height: 100vh" class="d-flex flex-column justify-content-between">
    <nav class="navbar navbar-expand-lg" style='background-color:lightsteelblue'>
        <div class="container">
            <h1 class="navbar-brand">Giant Book Supplier</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                    </a>
                    @yield('nav_category')
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('publishers') }}">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                </ul>
          </div>
        </div>
      </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="container text-center">
        <h6>© Happy Book Store 2022</h6>
    </footer>
    
</body>
</html>