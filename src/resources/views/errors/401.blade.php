@extends('layouts.app')
@section('title','401')
@section('description','Unauthenticated')
@section('color','#FF0000')
@section('content')
    <div class="container text-center mt-5">
        <h1 class="display-1 font-weight-bold">401</h1>
        <p class="lead">You are unauthenticated!</p>
        <div class="btn-group" role="group">
            <a href="#" class="btn btn-outline-dark" onclick="window.history.back()"><i class="fas fa-arrow-left"></i> Go Back</a>
            <a href="{{route('home')}}" class="btn btn-outline-dark"><i class="fas fa-home"></i> Go Home</a>
            <a target="_blank" href="https://github.com/DriedSponge/cs-club-website/issues/new"
               class="btn btn-outline-danger"><i class="fas fa-flag"></i> Report Issue</a>
        </div>
    </div>s
@endsection