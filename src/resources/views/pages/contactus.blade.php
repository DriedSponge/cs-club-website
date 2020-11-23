@extends('layouts.app')
@section('title',"Contact Us")
@section('head')
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
@endsection
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
        <div id="success-message" class="alert alert-success d-none" role="alert">
            <span id="succtext">Your message has been sent!</span>
        </div>

        <form id="contact" method="POST" action="{{route('contact-post')}}">
            <div class="card shadow border-0">
                <div class="card-header">
                    <h3>Contact Form</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <label class="form-label" for="name">Your Name <span class="text-danger">*</span></label>
                            <input name="name" id="name" type="text" class="form-control" placeholder="Your Name" max="120" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <label class="form-label" for="email">Your Email <span class="text-danger">*</span></label>
                            <input name="email" id="email" type="text" class="form-control" placeholder="Your Email" max="120" />
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="subject">Subject <span class="text-danger">*</span></label>
                            <input name="subject" id="subject" type="text" class="form-control  mb-3" placeholder="Subject" max="256" />
                            <label class="form-label" for="message">Message <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="5" name="message" id="message" placeholder="Message..." maxlength="2000" minlength="10">Message...</textarea>
                        </div>
                        <div class="col-12">
                            <div id="captcha" class="captcha"></div>
                            <input type="hidden" value="" name="captcha_token">
                            <button id="send" class="btn btn-lg btn-primary d-none" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(() => {
            $('#contact').formInit({
                callback: function (response) {
                    if (response.data.success) {
                        $("#contact").hide();
                        $("#succtext").html(response.data.success);
                        $('#success-message').removeClass('d-none')
                    } else {
                        if (response.data.error) {
                            console.log(response.data.error);
                        }
                        if (response.data.captcha) {
                            RegenCap()
                            console.log(response.data.captcha);
                        }
                        var r = response.data;
                        for (var key in r){
                            console.log(key, r[key][0]);
                        }
                    }
                },
                loader: {
                    enabled:true,
                    fullScreen:false,
                    destroyLoader:true,
                    theme:"loading-cover-light"
                },
            });
        })
        function Reset(){
            RegenCap()
            $('#contact-form').show().formReset();
            $('#success-message').addClass('d-none');
        }
        VerifyCallback = function(response) {
            $('#send').removeClass('d-none')
            $('[name="captcha_token"]').attr('value',response)
            $('#captcha').addClass('d-none')
        }
        ExpiredCallback = function (response) {
            $('#captcha').removeClass('d-none')
            $('#captcha_token').attr('value','botmaybe')
            $('#send').addClass('d-none')
        }
        ErrorCallback = function (response) {
            alert('Captcha faild, please try again.')
        }
        function RegenCap(){
            $('#captcha').removeClass('d-none')
            $('#captcha_token').attr('value','botmaybe')
            $('#send').addClass('d-none')
            grecaptcha.reset();
        }
        var onloadCallback = function() {
            grecaptcha.render('captcha', {
                'sitekey' : '{{config("captcha.sitekey")}}',
                'theme': 'light',
                'callback':VerifyCallback,
                'expired-callback':ExpiredCallback,
                'error-callback':ErrorCallback
            });
        };
    </script>
@endsection
