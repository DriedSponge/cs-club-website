<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description')">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="theme-color" content="@yield('color','#001B64')">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    @yield('head')
</head>
