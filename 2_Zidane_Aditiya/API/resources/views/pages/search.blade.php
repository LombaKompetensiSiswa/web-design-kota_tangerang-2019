<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 bg-secondary h-100 p-3">
                <h2 class="text-center">Bani Yas</h2>
                <div class="bg-light p-2">   
                    <a href="" class="w-100">
                        <div>
                            <span>{{$data->from_place->name}}</span><br/>
                            <span>{{$data->to_place->name}}</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-8">

            </div>
        </div>
    </div>
</body>
</html>