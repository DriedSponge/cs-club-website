{{--This is our head include that is included on every page--}}
{{-- The @yield directive is used to display the contents of a given section. --}}
<head>
    {{-- Sets the character set https://www.w3schools.com/tags/att_meta_charset.asp --}}
    <meta charset="UTF-8">
    {{-- Tells people using internet exploter what version of their browser they need to use --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Makes it so our site can be responsive https://www.w3schools.com/css/css_rwd_viewport.asp --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Prevents cross-site request forgery
    https://en.wikipedia.org/wiki/Cross-site_request_forgery https://laravel.com/docs/8.x/csrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Sets the pages description to whatever the description @section is on the page--}}
    <meta name="description" content="@yield('description')">

    {{-- Sets the pages title to whatever the title @section is on the page--}}
    <title>@yield('title') - {{ config('app.name') }}</title>

    {{-- Sets the pages theme-color. If the page as a @section for the color,
    then it will use it, otherwise it will default to  #005F94 --}}
    <meta name="theme-color" content="@yield('color','#005F94')">

    {{-- Gets our compiled css from the public folder https://laravel.com/docs/8.x/helpers#method-asset --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Gets our compiled js from the public folder https://laravel.com/docs/8.x/helpers#method-asset --}}
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- Sets the favicon https://en.wikipedia.org/wiki/Favicon --}}
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">

    @yield('head')
</head>
