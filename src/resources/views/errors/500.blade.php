@extends('layouts.app')
@section('title','500')
@section('description','An error occured on the server')
@section('color','#FF0000')
@section('content')
    <div class="container text-center mt-5">
        <h1 class="display-1 font-weight-bold">500</h1>
        <p class="lead">An error occured on the server!</p>
        <div class="btn-group" role="group">
            <a href="#" class="btn btn-outline-dark" onclick="window.history.back()"><i class="fas fa-arrow-left"></i> Go Back</a>
            <a href="{{route('home')}}" class="btn btn-outline-dark"><i class="fas fa-home"></i> Go Home</a>
        </div>
    </div>
@endsection