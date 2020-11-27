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
    <div id="intro">
        <div class="container">
            <br>
            <h1 class="text-center display-4 font-weight-bold p-5">Welcome</h1>
            <br>
            <div class="container-sm">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h1>Our Vision</h1>
                        <br>
                        <p class="fs-4">
                            A club that strives to build a community of students interested in Computer Science and coding that works on projects together. It encourages students to challenge themselves by attending hackathons, and competitive competitions like the U.S.A Computing Olympiad. No previous coding experience required!
                        </p>
                        <br>
                        <a class="btn btn-outline-primary" href="{{route('projects')}}"><i class="fas fa-book"></i> Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
