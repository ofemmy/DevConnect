<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen antialiased leading-none">
    @include('includes.navbar')
<main>


    @yield('content')
</main>


    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/1a77e76b10.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
