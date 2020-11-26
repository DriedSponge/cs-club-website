@extends('layouts.app')
@section('title','Projects')
@section('description','Our clubs past, current, and future projects.')
@section('content')
<div class="main" class="container">
    <style>
        p.solid {border-style: solid;}
    </style>
        <div style="50%"></div>
        <div class="home">
            <div class="bg-muted">
            <u style="color:#ffffff">
            <br>
            <div style="background-image: url('https://i1.pickpik.com/photos/886/82/394/binary-binary-system-computer-binary-code-preview.jpg');">
            <h1 style="font-size:60px;color:white;border:3px;border-style:solid;border-color:#ffffff;padding:1em"class="text-center">Computer Science Club Projects:</h1>
            <br>
            </u>
            </div>
        <div class="rounded bg-info text-light"> 
    <div style="width:100%;clear:both;">
        <div style="width:25%;float:left;">
            <br>
            <br>
            <br>
            <img src="https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/a010-markusspiske-mar19-1902-4988.jpg?bg=F4F4F3&con=3&cs=srgb&dpr=1&fm=jpg&ixlib=php-3.1.0&q=65&usm=15&vib=3&w=1200&s=2c963e6c518bdbd305d20dd66e0430de" style="width:300px;height:300px;margin-left:10%">
            <br>
            <br>
            <br>
            <img src="https://blog.inkforall.com/wp-content/uploads/2019/11/content-creator-scaled.jpg" style="width:300px;height:300px;margin-left:10%">
            <br>
            <br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2d/Tensorflow_logo.svg" style="width:300px;height:300px;margin-left:10%">
        </div>
        <div style="width:50%;float:left;">
            <br><br>
            <h2>Current Projects:</h2>
            <br>
            <h4>As a team, we work on many projects that challenge us to cultivate new skills.</h4>
            <h4>We are currently working on the BHS computer science club website project<h4>
            <a href="https://github.com/DriedSponge/cs-club-website">Website Project Git Hub Repository</a>
            <br><br>
            <h2>Future Projects:</h2>
            <br>
            <h3>Critters Project and Competition:</h3>
            <h4>This project involves many skills including Object oriented programming and a firm understanding of inheritance. It will culminate in a Critters Competition in which each participant will design their own critter and compete to find out which critter is capable of dominating the critter world!</p>
            <a href="https://courses.cs.washington.edu/courses/cse142/20su/homework.html#a8">Please view starter files here</a><br>
            <br>
            <h3>AI Handwritten Numbers Project:</h3>
            <h4>This project uses machine learning to recognize handwritten digits. Most of it can be explained on the tensorflow website, although several things are needed to get started. This includes downloading Visual Studio Code and Python.</h4>
            <br><h4>Artificial Intelligence Setup Steps:<h4>
            <a href="https://www.python.org/downloads/">Install Python</a>
            <br><a>Set up VSCode:</a>
            <br><a href="https://code.visualstudio.com/download">Visual Studio Code</a>
            <br><a href="https://code.visualstudio.com/docs/languages/python">Python</a>
            <h4>Tensorflow: This is a python library for importing/using all the AI material.</h4>
            <h4>Install: Once python is installed, run 'pip install tensorflow' in the command prompt.<h4>
            <a href="https://www.tensorflow.org/tutorials/quickstart/beginner">Handwritten numbers project</a>
            <br><br>
        </div>
        <div style="width:25%;float:left;">
            <br>
            <br>
            <br>
            <img src="data:image/png;base64,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" style="width:300px;height:300px;margin-left:10%">
            <br>
            <br>
            <br>
            <img src="https://www.atees.org/blog/wp-content/uploads/2019/06/shutterstock-1199480788.png" style="width:300px;height:300px;margin-left:10%">
            <br>
            <br>
            <img src="data:image/jpeg;base64,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" style="width:300px;height:300px;margin-left:10%">
        </div>        
    </div>
    <center>
    <div>
    <img src="https://p0.pxfuel.com/preview/920/519/697/abstract-php-c-analytics.jpg"; alt="Homes for Sale!"; style="width:400px;height:400px;">
    <img src="https://storage.needpix.com/rsynced_images/project-875699_1280.jpg"; style="width:400px;height:400px">
    <br><br>
    </center>
    </div>
@endsection
