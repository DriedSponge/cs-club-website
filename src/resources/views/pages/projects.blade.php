@extends('layouts.app')
@section('title','Projects')
@section('description','Our clubs past, current, and future projects.')
@section('content')

    <div class="container">
        <br>
        <h1 class="text-center display-4 font-weight-bold">Current Projects</h1>
        <p class="text-center lead">As a team, we work on many projects that challenge us to cultivate new skills.</p>
        <br>
        <div class="container">
            <br>
            <div class="row text-center">
                <div class="col-sm-12 col-lg-6 mb-5">
                    <div class="card shadow">
                        <h4 class="card-header">
                            Computer Science Club Website
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">About</h5>
                            <p class="card-text">
                                This project is our club website.
                                It was created using the <a target="_blank" href="https://laravel.com/">Laravel PHP Framework</a>
                                and <a target="_blank" href="https://getbootstrap.com/">Bootstrap CSS Library</a>. Currently the source code
                                is private to protect it, however if you <a href="{{route('github.invite')}}">authenticate with Github</a>, the system will automatically
                                send and accept a repository invite for you. If for whatever reason the system fails, let Jordan know and he can
                                manually invite you to the repository.
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a target="_blank" href="https://github.com/DriedSponge/cs-club-website/"
                                   class="btn btn-outline-dark"><i class="fab fa-github"></i> Source Code</a>
                                <a href="{{route('github.invite')}}"
                                   class="btn btn-outline-dark"><i class="fas fa-unlock"></i> Gain Access To Source Code</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 mb-5">
                    <div class="card shadow">
                        <h4 class="card-header">
                            Critters Project and Competition
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">About</h5>
                            <p class="card-text">This project involves many skills including object oriented programming
                                and a firm understanding of inheritance. It will culminate in a Critters Competition in
                                which each participant will design their own critter and compete to find out which
                                critter is capable of dominating the critter world!
                            </p>

                            <a target="_blank"
                               href="https://courses.cs.washington.edu/courses/cse142/20su/homework.html#a8"
                               class="btn btn-outline-dark"><i class="far fa-file-code"></i> Starter Files</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-sm-12 col-lg-6 mb-5">
                    <div class="card shadow">
                        <h4 class="card-header">
                            AI Handwritten Numbers Project
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">About</h5>
                            <p class="card-text">This project uses machine learning to recognize handwritten digits.
                                Most of it can be explained on the <a target="_blank"
                                                                      href="https://www.tensorflow.org/tutorials/quickstart/beginner">tensorflow
                                    website</a>, although several things
                                are needed to get started. This includes downloading <a target="_blank"
                                                                                        href="https://code.visualstudio.com/download">Visual
                                    Studio Code</a> and <a target="_blank" href="https://www.python.org/downloads/">Python</a>.
                            </p>
                            <p class="card-text">
                                Tensorflow is a python library for imporating/using all the AI material. Once you have
                                python installed, install Tensor Flow by running <code>pip install tensorflow</code> in
                                the terminal/shell of your choice.
                            </p>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a target="_blank" href="https://www.python.org/downloads/"
                                   class="btn btn-outline-dark"><i class="fab fa-python"></i> Python</a>
                                <a target="_blank" href="https://www.tensorflow.org/tutorials/quickstart/beginner"
                                   class="btn btn-outline-dark"><i class="fas fa-play"></i> Quick Start</a>
                                <a target="_blank" href="https://code.visualstudio.com/download"
                                   class="btn btn-outline-dark"><i class="fas fa-code"></i> VS Code</a>
                            </div>
                        </div>
                    </div>
                </div>

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
