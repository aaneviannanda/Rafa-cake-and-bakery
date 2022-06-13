<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This website contains information about rafa cake & bakery products" />

    <!-- Icon -->
    <link rel="icon" href="{{ asset('img/favicon-rafa.png') }}">

    <!-- Title Website -->
    <title>RAFA CAKE & BAKERY - CPSG62</title>    
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Poppins:wght@200;400&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/b070c8f1df.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    @laravelPWA
</head>
<body>
    <div class="body">
        <div>
            @include('layout.client.nav')
            @yield('content')
        </div>
    </div>
    @include('sweetalert::alert')
</body>
</html>