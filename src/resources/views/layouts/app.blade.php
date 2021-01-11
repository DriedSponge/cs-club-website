{{--
This is our default layout. We use the same layout because all of our pages have the same structure.
https://laravel.com/docs/8.x/blade#defining-a-layout
--}}
<!doctype html>
<html lang="en">
@include('inc.head') {{-- Include the head from the inc folder --}}
<body>
@include('inc.nav') {{-- Include the nav from the inc folder --}}
{{--
The @yield directive is used to display the contents of a given section.
Any page that is an extension (child) of this layout will have a section named content.
The content section will contain the pages general content, which will automatically be put in the body.
--}}
@if(session('success'))
    <div class="alert alert-success alert-dismissible rounded-0 text-center" role="alert">
        {!! session('success') !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(session('warn'))
    <div class="alert alert-warning alert-dismissible rounded-0 text-center" role="alert">
        {!!session('warn')!!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger alert-dismissible rounded-0 text-center" role="alert">
        {!! session('error') !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<main>
    @yield('content')
</main>
@include('inc.footer')
</body>
</html>
