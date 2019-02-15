<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name', 'Bani Yas') }} | @yield('title')</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-md navbar-dark navbar-laravel bg-dark mb-4">
        <div class="container">
            
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Bani Yas') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="navbar-item">
                        
                    </li>
                </ul>
                </ul>
            </div>
            <a href="/logout/token/{{ session('token') }}" class="nav-link btn btn-danger btn-sm">LOGOUT</a>
        </div>
    </nav>

    @yield('content')


    <footer>
        <div class="container-fluid">
            <div class="row bg-dark p-3">
                <div class="col-12">
                    <p class="text-white text-center">Copyright By Muhamad Adam</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>