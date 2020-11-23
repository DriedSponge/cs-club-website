@extends('layouts.app')
@section('title',"Contact Us")
@section('head')
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
@endsection
@section('content')
    <br>
    <div class="text-center">
        <h2>Contact Us</h2>
        <br>
        <p><strong>If you're interested in joining the club, fill out this <a
                        href="https://forms.gle/KaEBXfWH2hKPJ52x6" target="_blank">google form</a></strong></p>
        <p><strong>For other questions or inquries, you can <a href="mailto:bothellcompsciclub@gmail.com"
                                                               target="_blank">email
                    us</a>, join our <a href="https://discord.gg/uGW8uXVBJW" target="_blank">Discord Server</a>, or
                fillout the below contact form.</strong></p>
    </div>
    <br>
    <div class="container">
        <br>
        <div id="success-message" class="alert alert-success d-none" role="alert">
            <h4 class="alert-heading">Good Job!</h4>
            <p id="succtext">Your message has been successfully sent!</p>
            <hr>
            <p class="mb-0">
                <button class="btn btn-success" onclick="Reset()">Send Another Message</button>
            </p>
        </div>
        <form id="contact" method="POST" action="{{route('contact-post')}}">
            <div class="card shadow border-0">
                <div class="card-header">
                    <h3>Contact Form</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <label class="form-label" for="name">Your Name <span
                                        class="text-danger">*</span></label>
                            <div class="input-group">

                                <input name="name" id="name" type="text" class="form-control"
                                       placeholder="Your Name"
                                       max="150"/>
                                <div id="name-feedback"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <label class="form-label" for="email">Your Email <span
                                        class="text-danger">*</span></label>
                            <div class="input-group">
                                <input name="email" id="email" type="text" class="form-control"
                                       placeholder="Your Email"
                                       max="150"/>
                                <div id="email-feedback"></div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="subject">Subject <span
                                        class="text-danger">*</span></label>
                            <div class="input-group mb-3">

                                <input name="subject" id="subject" type="text" class="form-control"
                                       placeholder="Subject" max="256"/>
                                <div id="subject-feedback"></div>
                            </div>
                            <label class="form-label" for="message">Message <span
                                        class="text-danger">*</span></label>
                            <div class="input-group">
                                <textarea class="form-control" rows="5" name="message" id="message"
                                          placeholder="Message..." maxlength="2000" minlength="15">Message...</textarea>
                                <div id="message-feedback"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div id="captcha" class="captcha"></div>
                            <div class="invalid-feedback">
                                Captcha failed, please try again.
                            </div>
                            <input type="hidden" value="" name="captcha_token">
                            <button id="send" class="btn btn-outline-primary d-none" type="submit">Send</button>
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
                            $('#captcha').addClass('is-invalid')
                        }
                        var r = response.data;
                        $('#contact input, #contact textarea').removeClass("is-invalid").addClass('is-valid')
                        for (var key in r) {
                            console.log(key, r[key][0]);
                            $("#" + key).addClass('is-invalid');
                            $("#" + key + "-feedback").removeClass("is-valid").addClass('invalid-feedback').text(r[key])
                        }

                    }
                },
                loader: {
                    enabled: true,
                    fullScreen: false,
                    destroyLoader: true,
                    theme: "loading-cover-light"
                },
            });
        })

        function Reset() {
            RegenCap()
            $('#contact').show().formReset();
            $('#success-message').addClass('d-none');
            $('.captcha').removeClass('is-invalid')

            $('#contact input, #contact textarea').removeClass("is-invalid").removeClass('is-valid')
        }

        VerifyCallback = function (response) {
            $('#send').removeClass('d-none')
            $('[name="captcha_token"]').attr('value', response)
            $('#captcha').addClass('d-none').removeClass('is-invalid')

        }
        ExpiredCallback = function (response) {
            $('#captcha').removeClass('d-none')
            $('#captcha_token').attr('value', 'botmaybe')
            $('#send').addClass('d-none')
        }
        ErrorCallback = function (response) {
            $("captcha").addClass('is-invalid')
        }

        function RegenCap() {
            $('#captcha').removeClass('d-none')
            $('#captcha_token').attr('value', 'botmaybe')
            $('#send').addClass('d-none')
            grecaptcha.reset();
        }

        var onloadCallback = function () {
            grecaptcha.render('captcha', {
                'sitekey': '{{config("captcha.sitekey")}}',
                'theme': 'light',
                'callback': VerifyCallback,
                'expired-callback': ExpiredCallback,
                'error-callback': ErrorCallback
            });
        };
    </script>
@endsection
