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

@section('keywords','Home')

{{-- This is where we define what goes into our content section --}}
@section('content')
    <div id="intro">
        <div class="container">
            <br>
            <h1 class="text-center display-4 font-weight-bold p-5">Welcome</h1>
            <br>
            <div class="container-sm pb-5">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h1>Our Vision</h1>
                        <br>
                        <p class="fs-4">
                            A club that strives to build a community of students interested in Computer Science and coding that works on projects together. It encourages students to challenge themselves by attending hackathons, and competitive competitions like the U.S.A Computing Olympiad. No previous coding experience required!
                        </p>
                        <br>

                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-outline-primary" href="{{route('projects')}}"><i class="fas fa-book"></i> Learn About What We're Working On</a>
                            <a target="_blank" href="https://forms.gle/KaEBXfWH2hKPJ52x6" class="btn btn-outline-success"><i class="fas fa-user-plus"></i> Join Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container mb-5">
        <div class="card shadow border-0 p-3">
            <div class="card-body">
                <h2>Recent Commits</h2>
                <h6 class="text-muted fst-italic mb-4">Updated: {{\Carbon\Carbon::parse($lastupdated)->diffForHumans()}}</p></h6>
                @foreach($commits as $commit)
                    <div class="card shadow my-3 rounded-3 border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-1 col-md-6">
                                    <img data-src="{{$commit['author.avatar_url']}}" class="lozad image-fluid rounded-circle" width="64" height="64" alt="{{$commit['author.login']}} Profile Picture">
                                </div>
                                <div class="col-lg-11 col-md-6">
                                    <p class="card-text"><strong><a href="{{$commit['author.html_url']}}" target="_blank">{{$commit['author.login']}}</a> - {{$commit['commit.message']}}</strong> <span data-toggle="tooltip" data-placement="top" title="{{\Carbon\Carbon::parse($commit['commit.committer.date'])->setTimezone("America/Los_Angeles")->toDayDateTimeString()}}" class="text-muted fst-italic">{{\Carbon\Carbon::parse($commit['commit.committer.date'])->diffForHumans()}}</span></p>
                                    <p class="card-text ">
                                        <a href="https://github.com/DriedSponge/cs-club-website" target="_blank"><span class="badge bg-success"><i class="fas fa-code-branch"></i> master</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        const observer = lozad();
        observer.observe();
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
@endsection
