@extends('layouts.app')
@section('title','Members')
@section('description',"Our clubs members")
@section('keywords','Members')

@section('content')
{{--    I switched things over to use the bootstrap grid system to help make the page responsive on mobile devices--}}
    <div class="container">
        <br>
        <h1 class="text-center display-4 font-weight-bold">Our Members</h1>
        <br>
        <h2 class="text-center font-weight-bold">Officers</h2>
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-6 col-sm-12">
                <img width="170" height="227" data-src="{{asset('imgs/members/soham.jpg')}}" class="members-image img-fluid mx-auto d-block lozad"
                     alt="soham">
                <div class="text-center">
                    <h4>Soham Bhosale</h4>
                    <h6 class="mb-2 text-muted">President and Founder</h6>
                </div>
            </div>
        </div>
        <br>
        @php
            $i = 0;
        @endphp
        <div class="row justify-content-center">
            @foreach($officers as $officer)
                @php
                    $i++;
                @endphp
                <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                    <img width="170" height="227" data-src="{{$officer['img']}}"
                         class="members-image img-fluid mx-auto d-block mb-1 lozad" alt="{{$officer['name']}}">
                    <div class="text-center">
                        <h5>{{$officer['name']}}</h5>
                        <h6 class="mb-2 text-muted">{{$officer['title']}}</h6>
                    </div>
                </div>
                @if($i % 6 == 0)
        </div>
        <div class="row justify-content-center">
            @endif
            @endforeach
        </div>
            <br>
            <h2 class="text-center font-weight-bold">Members</h2>
            <br>
                @php
                    $j = 0;
                @endphp
                <div class="row justify-content-center">
                    @foreach($members as $member)
                        @php
                            $j++;
                        @endphp
                        <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                            <img width="170" height="227" data-src="{{$member['img']}}"
                                 class="members-image img-fluid mx-auto d-block mb-1 lozad" alt="{{$member['name']}}">
                            <div class="text-center">
                                <h5>{{$member['name']}}</h5>
                                <h6 class="mb-2 text-muted">Member</h6>
                            </div>
                        </div>
                        @if($j % 6 == 0)
                </div>
                <div class="row justify-content-center">
    @endif
    @endforeach
                </div>
    </div>
    <script>
        const observer = lozad();
        observer.observe();
    </script>
@endsection
