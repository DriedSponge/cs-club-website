<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
Bothell High School Computer Science Club Website Contact Form Response
<br>
<hr>
<br>
<strong>Sender: {{$data->Name}} ({{$data->Email}})</strong>
<br>
<strong>Subject: {{$data->Subject}}</strong>
<br>
<br>
{{$data->Message}}
</body>
</html>
