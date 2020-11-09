@extends('layouts.app')
@section('title','Events')
@section('description','Events we will be attending this year.')
@section('content')
    <div class="container">
        <h1>Events We Will Be Attending</h1>
        <br>
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-6 mb-md-0" style="padding-top: 10px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Code Day</h5>
                        <h6 class="card-subtitle mb-2 text-muted">December 4-6</h6>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="col-lg-6 col-sm-12 col-md-6 mb-md-0" style="padding-top: 10px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">USA Computing Olympiad</h5>
                        <h6 class="card-subtitle mb-2 text-muted">December 13-16</h6>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection