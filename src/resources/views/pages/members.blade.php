@extends('layouts.app')
@section('title','Members')
@section('description',"Our clubs members")
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
            // Sorry for throwing some PHP in here. I wanted to loop through an
            // array of members so we can write less code. Let me know if you want to know more about this.
            $officers =array(
              ["name"=>"Sathvik","title"=>"Internal Vice President","img"=>"sathvik.jpg"],
              ["name"=>"Adit Gupta","title"=>"External Vice President","img"=>"adit.jpg"],
              ["name"=>"Clair Li","title"=>"Secretary","img"=>"blank-user.gif"],
              ["name"=>"Roshan Skariah","title"=>"Treasurer","img"=>"roshan.jpg"],
              ["name"=>"Dash Pickrell","title"=>"Treasurer","img"=>"dash.jpg"],
              ["name"=>"Yasmine Shubber","title"=>"Public Relations","img"=>"blank-user.gif"],
              ["name"=>"Wyatt Ford","title"=>"Webmaster","img"=>"wyatt.jpg"],
              ["name"=>"Nathan Hendrickson","title"=>"Co-Events Chair","img"=>"blank-user.gif"],
              ["name"=>"Areeb Emran","title"=>"Co-Events Chair","img"=>"areeb.jpg"],
              ["name"=>"Jong-Hyun Lee","title"=>"Fundraising Chair","img"=>"blank-user.gif"],
            );
            $i = 0;
        @endphp
        <div class="row justify-content-center">
            @foreach($officers as $officer)
                @php
                    $i++;
                @endphp
                <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                    <img width="170" height="227" data-src="{{asset('imgs/members/'.$officer['img'])}}"
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
                    $members =array(
                      ["name"=>"Yasmine Shubber","img"=>"blank-user.gif"],
                      ["name"=>"Kaden Allen","img"=>"blank-user.gif"],
                      ["name"=>"Yashwant Datti","img"=>"blank-user.gif"],
                      ["name"=>"Alex Dimov","img"=>"blank-user.gif"],
                      ["name"=>"Shunzo Hida","img"=>"blank-user.gif"],
                      ["name"=>"Manas Kumar","img"=>"blank-user.gif"],
                      ["name"=>"Ivan Labovich","img"=>"blank-user.gif"],
                      ["name"=>"Michelle Li","img"=>"blank-user.gif"],
                      ["name"=>"Emily Pham","img"=>"blank-user.gif"],
                      ["name"=>"Amanda Sim","img"=>"blank-user.gif"],
                      ["name"=>"Khushi Singh","img"=>"blank-user.gif"],
                      ["name"=>"Jordan Tucker","img"=>"blank-user.gif"],
                    );
                    $j = 0;
                @endphp
                <div class="row justify-content-center">
                    @foreach($members as $member)
                        @php
                            $j++;
                        @endphp
                        <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                            <img width="170" height="227" data-src="{{asset('imgs/members/'.$member['img'])}}"
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
