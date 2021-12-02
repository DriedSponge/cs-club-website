{{--
We are extending our default layout, therefore making this page a child of that layout.
Since this is now a child of the default layout, it will inherit all of the default layouts properties.'

Views which extend a Blade layout may inject content into the layout's sections using @section directives.
Remember, the contents of these sections will be displayed in the layout using @yield.
https://laravel.com/docs/8.x/blade#extending-a-layout
--}}
@extends('layouts.app')

@section('keywords','Events')

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
            <h3 class="text-center font-weight-bold">Recurring Events</h3>
            <br>
            <div class="row text-center">
                <div class=" col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            @php
                                $date = \Carbon\Carbon::now();
                               ;
                            @endphp
                            <b>Weekly USACO Mettings</b> - <i>Every Tuesday ({{ $date->next("tuesday")->format("m/d/Y") }})</i>
                        </div>
                        <div class="card-body">
                            <p>
                                Every Tuesday we hold our weekly USACO meetings on discord. New problems will be posted in the discord every week!
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <b>Weekly General Mettings</b> - <i>Every Thursday ({{ $date->next("thursday")->format("m/d/Y") }})</i>
                        </div>
                        <div class="card-body">
                            <p>
                                Every Thursday we hold our weekly club mettngs over zoom/discord. We discuss upcoming events, projects, competitions, & more!
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h3 class="text-center font-weight-bold">Past Events</h3>
            <br>
            <div class="row text-center">
                <div class=" col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <b>Virtual Code Day</b> - <i>December 4th - 6th 2020</i>
                        </div>
                        <div class="card-body">
                            <p>We will be attending the Virtual CodeDay hackathon to help enhance our technical and team
                                building skills. By attending this event, we will be also be able to meet new people and
                                create a network.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <b>First Contest</b> - <i>December 13th - 16th 2020</i>
                        </div>
                        <div class="card-body">
                            <p>Our first competitive competition will be the U.S.A Computing Olympiad. It will really
                                challenge us to learn new and advanced concepts, and further develop our problem solving
                                skills. We will be having weekly drop-in practice sessions to help us learn how to
                                tackle this challenge!</p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <b>New Computing Problems This Week!</b>
                        </div>
                        <div class="card-body">
                            <p>
                                From this week, we are also starting new computing problems of the week activity!
                                To keep our coding skills sharpened, we will work on one easy computing problem and one
                                slightly harder one per week. We could discuss solutions/challenges during
                                our Wednesday meetings as well.
                                <br>
                                You can write solutions in any of the languages that the U.S.A Computing Olympiad accepts.
                            </p>
                            <p class="text-center fw-bold">
                                Here are this week's problems:
                            </p>
                            <div class="text-center">
                                <a class="btn btn-outline-success" href="http://www.usaco.org/index.php?page=viewproblem2&cpid=663" target="_blank" disabled>Easy Problem</a>
                                <a class="btn btn-outline-danger" href="http://www.usaco.org/index.php?page=viewproblem2&cpid=736" target="_blank" disabled>Harder Problem</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
