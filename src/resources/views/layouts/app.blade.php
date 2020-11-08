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
@yield('content')

</body>
</html>
