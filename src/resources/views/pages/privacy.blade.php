@extends('layouts.app')
@section('tilte',"Privacy Policy")
@section('description','Information about the data we collect.')
@section('content')
    <div class="container">
        <br>
        <h1 class="text-center display-4 font-weight-bold">Privacy Policy</h1>
        <br>
        <div class="card">
            <h4 class="card-header">Information We Collect Automatically</h4>
            <div class="card-body">
                <h5 class="card-title">Google Analytics</h5>
                <p class="card-text">We use Google Analytics to evaluate your use of the site, compile reports on activity, collect
                demographic data, analyze performance metrics, and collect and evaluate other information relating to
                the site and mobile and internet usage. This third party uses cookies and other technologies to help
                analyze and provide us the data. By accessing and using the site, you consent to the processing of data
                about you by Google Analytics.</p>
                <h5>Cloudflare</h5>
                <p class="card-text">Cloudflare processes requests to our services before they reach
                    our servers, to block malicious traffic and cache common resources to improve load times. As a
                    result, Cloudflare has access to everything that is sent to our services, and this information is
                    used in accordance with their <a href="https://www.cloudflare.com/privacypolicy/" target="_blank">Privacy
                        Policy</a>. At the time that this policy was last updated, they collect some information about
                    the requests that you make in order to provide a better service, but they state that they will never
                    sell your personal information, or use it for marketing.</p>
            </div>
        </div>
    </div>
@endsection