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
@section('title','Events')

{{-- Same as the title, but for the description. --}}
@section('description',"A club that strives to build a community of students interested in Computer Science and coding that works on projects together. It encourages students to challenge themselves by attending hackathons, and competitive competitions like the U.S.A Computing Olympiad. No previous coding experience required!")

{{-- This is where we define what goes into our content section --}}
@section('content')

    <div class="container">
        <br>
        <h1 class="text-center display-4 font-weight-bold">Events</h1>
        <p class="text-center lead">Our club attends many events that encourage us to learn new things, and build
            community.</p>
        <br>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <b>Critters Competition</b> - Wednesday, November 25
                        </div>
                        <div class="card-body">
                            <p>We will be designing our own critters and having them face off to see which one ends up
                                dominating the critter world! P.S. The winner gets a prize.</p>
                            <div class="text-center">
                                <a class="btn btn-outline-primary"
                                   href="https://drive.google.com/drive/u/0/folders/1EgCa18omcktXcXZxP7CqaHcs237zzrBF">Spec
                                    & Files</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <b>Virtual Code Day</b> - December 4th - 6th (Complete)
                        </div>
                        <div class="card-body">
                            <p>We will be attending the Virtual CodeDay hackathon to help enhance our technical and team
                                building skills. By attending this event, we will be also be able to meet new people and
                                create a network.</p>
                            <div class="text-center">
                                <a class="btn btn-outline-primary disabled" href="https://virtual.codeday.org/"
                                   disabled>Register</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <b>First Contest</b> - December 13th - 16th (Complete)
                        </div>
                        <div class="card-body">
                            <p>Our first competitive competition will be the U.S.A Computing Olympiad. It will really
                                challenge us to learn new and advanced concepts, and further develop our problem solving
                                skills. We will be having weekly drop-in practice sessions to help us learn how to
                                tackle this challenge!</p>
                            <div class="text-center">
                                <a class="btn btn-outline-primary disabled" href="http://www.usaco.org/" disabled>Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
