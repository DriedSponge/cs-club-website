{{--
We are extending our default layout, therefore making this page a child of that layout.
Since this is now a child of the default layout, it will inherit all of the default layouts properties.'

Views which extend a Blade layout may inject content into the layout's sections using @section directives.
Remember, the contents of these sections will be displayed in the layout using @yield.
https://laravel.com/docs/8.x/blade#extending-a-layout
--}}
@extends('layouts.app')

{{--
The @section directive, as the name implies, defines a section of content.

This is how we set our page title. We set the yield for title in our head include,
so now we want to specify what goes in that yield for this page.
--}}
@section('title','Home')

{{-- Same as the title, but for the description. --}}
@section('description',"A club that strives to build a community of students interested in Computer Science and coding that works on projects together. It encourages students to challenge themselves by attending hackathons, and competitive competitions like the U.S.A Computing Olympiad. No previous coding experience required!")

{{-- This is where we define what goes into our content section --}}
@section('content')
    <div class="container">
        <h1 class="text-center">Welcome!</h1>
        <h3 class="text-center">We are currently working on this I guess.</h3>
    </div>
@endsection
