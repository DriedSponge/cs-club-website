@extends('layouts.app')
@section('title','403')
@section('description','Unauthorized')
@section('color','#FF0000')
@section('content')
    <div class="container text-center mt-5">
        <h1 class="display-1 font-weight-bold">403</h1>
        <p class="lead">You are unauthorized!</p>
        <div class="btn-group" role="group">
            <a href="#" class="btn btn-outline-dark" onclick="window.history.back()"><i class="fas fa-arrow-left"></i> Go Back</a>
            <a href="{{route('home')}}" class="btn btn-outline-dark"><i class="fas fa-home"></i> Go Home</a>
        </div>
    </div>
@endsection