@extends('layouts.app')
@section('title','404')
@section('description','The page could not be found!')
@section('color','#FF0000')
@section('content')
    <div class="container text-center mt-5">
        <h1 class="display-1 font-weight-bold">404</h1>
        <p class="lead">The page you are looking for could not be found!</p>
        <div class="btn-group" role="group">
            <a href="#" class="btn btn-outline-dark" onclick="window.history.back()"><i class="fas fa-arrow-left"></i> Go Back</a>
            <a href="{{route('home')}}" class="btn btn-outline-dark"><i class="fas fa-home"></i> Go Home</a>
        </div>
    </div>
@endsection