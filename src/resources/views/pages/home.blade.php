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
<header>
        <!--Mask-->
        <div id="intro" class="view">

            <div class="mask rgba-black-strong">

                <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                    <div class="row d-flex justify-content-center text-center">

                        <div class="col-md-10">

                            <!-- Heading -->
                            <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Welcome</h2>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>

                            <div class="container">
                                <section id="vision" class="text-center">

                                    <!-- Heading -->
                                    <h2 class="mb-5 font-weight-bold">Our Vision</h2>

                                    <!--Grid row-->
                                    <div class="row d-flex justify-content-center mb-4">

                                        <!--Grid column-->
                                        <div class="col-md-8 mb-2">

                                            <!-- Description -->
                                            <p class="grey-text">
                                                A club that strives to build a community of students interested in Computer Science and coding that works on projects together. It encourages students to challenge themselves by attending hackathons, and competitive competitions like the U.S.A Computing Olympiad. No previous coding experience required!
                                            </p>
                                            <a class="btn btn-outline-primary" href="{{route('projects')}}" role="button">Learn More</a>

                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!--/.Mask-->
</header>

@endsection
