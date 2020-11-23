@extends('layouts.app')
@section('title',"Contact Us")
@section('content')
    <br>
    <div class="container">
        <div class="text-center">
            <h1>Contact Us</h1>
            <br>
            <p><strong>If you're interested in joining the club, fill out this <a href="https://forms.gle/KaEBXfWH2hKPJ52x6" target="_blank">google form</a></strong> </p>
            <p><strong>For other questions or inquries, you can <a href="mailto:bothellcompsciclub@gmail.com" target="_blank">email
                    us</a>, join our <a href="https://discord.gg/uGW8uXVBJW" target="_blank">Discord Server</a>, or
                    fillout the below contact form.</strong></p>
        </div>
        <br>
        <form id="contact" method="POST" action="{{route('contact-post')}}">
            <div class="row">

            </div>
        </form>
    </div>
@endsection
